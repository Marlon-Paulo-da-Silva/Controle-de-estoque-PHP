<?php
  class User{

    private $con;

    function __construct(){
      include_once("../database/db_connection.php");
      $db = new Database();

      $this->con = $db->connect();
    }

    //verifica se o usuário já está registrado
    public function emailExists($email){
      // proteção da aplicação contra ataques SQL
      // preparar Statment

      $pre_stmt = $this->con->prepare("SELECT id FROM user WHERE email = ?");
      $pre_stmt->bind_param("s",$email);
      $pre_stmt->execute() or die($this->con->error);
      $result = $pre_stmt->get_result();
      if($result->num_rows > 0){
        return 1;
      } else {
        return 0;
      }

    }
    public function createUserAccount($username, $email, $password, $usertype){
      if($this->emailExists($email)){
        return "EMAIL_ALREADY_EXISTS";
      } else {
        $pass_hash = password_hash($password, PASSWORD_BCRYPT, ["cost" => 8]);

        $date = date("d-m-Y");
        $notes = "";
        
        $pre_stmt = $this->con->prepare("INSERT INTO `user`(`username`, `email`, `password`, `usertype`, `register_date`, `last_login`, `notes`) VALUES (?,?,?,?,?,?,?)");
        $pre_stmt->bind_param("sssssss", $username, $email, $pass_hash, $usertype, $date, $date, $notes);
        $result = $pre_stmt->execute() or die($this->con->error);
        if($result) {
          return $this->con->insert_id;
        } else {
          return "SOME_ERROR";
        }

      }
    }

  }


  $user = new User();
  echo $user->createUserAccount("Marlon2","marlon2@gmail.com","senhateste","Admin");

?>

