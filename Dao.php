<?php

require_once 'KLogger.php';

class Dao {

  public $dsn = 'mysql:host=localhost;dbname=heroku_8e12e35414ca6ea';
  public $user = "root";
  public $password = "66bird13!";
  private $host = "us-cdbr-east-03.cleardb.com";
  #private $db = "heroku_8e12e35414ca6ea";
 # public $user = "b0b660f29fc63c";
  #public $pass = "e0503ed9";
  #public $dsn = 'mysql:host=us-cdbr-east-03.cleardb.com; dbname=heroku_8e12e35414ca6ea';
  protected $logger;
  

  public function __construct () {
    $this->logger = new KLogger ( "log.txt" , KLogger::DEBUG );
  }

  // public function getConnection () {
  //   try {
  //     $connection = new PDO($this->dsn, $this->user, $this->pass);
  //     $this->logger->LogInfo('Connection succeeded');
  //   } catch (PDOException $e) {
  //     echo 'Connection failed: ' . $e->getMessage();
  //     $this->logger->LogInfo('Connection failed: ' . $e->getMessage());
  //   }
  //   return $connection;
  // }
  
  private function getConnection () {
    try {
        $connection = new PDO($this->dsn, $this->user, $this->password);
        #echo 'Connected successfully';
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
    return $connection;
  }

  public function isAdmin($email){
    $connection = $this->getConnection();
    try {
      $q = $connection->prepare("select count(*) as total from users where email = :email and admin = 1");
      $q->bindParam(":email", $email);
      $q->execute();
      $row = $q->fetch();
      if ($row['total'] == 1){
        $this->logger->LogInfo("user is admin" . print_r($row,1));
        return true;
      }
      $this->logger->LogInfo("user is not admin" . print_r($row,1));
      return false;
    } catch(Exception $e){
      echo print_r($e, 1);
      exit;
    }
  }

  public function makeUser($email, $password) {
    $connection = $this->getConnection();
    try {
      $q = $connection->prepare("insert into users (email, password, admin) values (:email, :password, 0 )");
      $q->bindParam(":email", $email);
      $q->bindParam(":password", $password);
      $q->execute();

      $q = $connection->prepare("select count(*) as total from users where email = :email and password = :password");
      $q->bindParam(":email", $email);
      $q->bindParam(":password", $password);
      $q->execute();
      $row = $q->fetch();
      if ($row['total'] == 1){
        $this->logger->LogInfo("user was found!" . print_r($row,1));
        return true;
      }
      $this->logger->LogInfo("user not found!" . print_r($row,1) . print_r($email,1) . print_r($password,1));
      return false;
  } catch(Exception $e) {
    echo print_r($e, 1);
    exit;
  }
}
  public function userExist ($email, $password) {
    $connection = $this->getConnection();
    try {
        $q = $connection->prepare("select count(*) as total from users where email = :email and password = :password");
        $q->bindParam(":email", $email);
        $q->bindParam(":password", $password);
        $q->execute();
        $row = $q->fetch();
        if ($row['total'] == 1) {
           $this->logger->LogInfo("user found!" . print_r($row,1) . print_r("with username: " . $email, 1));
           return true;
        } else {
          $this->logger->LogInfo("user does not exist" . print_r($row,1) . print_r("with username: " . $email . "\n", 1));
           return false;
        }
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }

  }

  public function deleteComment ($id, $table) {
    $conn = $this->getConnection();
    $deleteQuery = "delete from $table where comment_id = :id";
    $q = $conn->prepare($deleteQuery);
    $q->bindParam(":id", $id);
    $q->execute();
  }

  public function insertComment ($name, $comment, $table) {
    $conn = $this->getConnection();
    $saveQuery = "insert into $table (email, comment) values (:name, :comment)";
    $q = $conn->prepare($saveQuery);
    //$q->bindParam(":table", $table);
    $q->bindParam(":name", $name);
    $q->bindParam(":comment", $comment);
    $q->execute();
  }

  public function getComments ($table) {
    $connection = $this->getConnection();
    try {
        $rows = $connection->query("select email, comment_id, comment, date_entered from $table order by date_entered asc", PDO::FETCH_ASSOC);
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
    return $rows;
  }

}