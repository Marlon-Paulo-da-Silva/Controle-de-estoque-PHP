<?php
  class User{

    private $con;

    function __construct(){
      include_once("../database/db_connection.php");
      $db = new Database();

      $this->con = $db->connect();
      
    }

    public function emailExists($email){
      // proteção da aplicação contra ataques SQL
      // preparar Statment

      $pre_stmt = $this->con->prepare("SELECT id FROM user WHERE email = ?");
      $pre_stmt->bind_param("s",$email);
      $pre_stmt->execute() or die($this->con->error);
      $result = $pre_stmt->get_result();

    }
    public function createUserAccount($username, $email, $password, $usertype){
      // proteção da aplicação contra ataques SQL
      // preparar Statment

      $pre_stmt = $this->con->prepare("");
    }

  }

  $obj = new User();

?>

