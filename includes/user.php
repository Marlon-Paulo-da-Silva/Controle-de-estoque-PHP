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

        $date = date('d-m-Y');
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

    public function userLogin($email, $password){
      $pre_stmt = $this->con->prepare("SELECT id, username, password, last_login FROM user WHERE email = ?");
      $pre_stmt->bind_param("s", $email);
      $pre_stmt->execute() or die($this->con->error);
      $result = $pre_stmt->get_result();

      if($result->num_rows < 1){
        return "NÃO REGISTRADO";
      } else {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])){
          $_SESSION["userid"] = $row["id"];
          $_SESSION["username"] = $row["username"];
          $_SESSION["last_login"] = $row["last_login"];

          //atualizando a data do ultimo login
          $last_login = date('d-m-Y h:m:s');
          $pre_stmt =  $this->con->prepare("UPDATE user SET last_login = ? WHERE email = ?");
          $pre_stmt->bind_param("ss", $last_login, $email);
          $result = $pre_stmt->execute() or die($this->con->error);
          if($result){
            return 1;
          } else {
            return 0;
          }

        } else {
          return "Password não encontrado";
        }
      }
    }

  }


  // $user = new User();

  // echo $user->userLogin("marlon2@gmail.com","senhateste");

  // echo $_SESSION["username"]
?>

