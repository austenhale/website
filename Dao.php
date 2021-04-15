
<?php

require_once 'KLogger.php';

class Dao {

  #public $dsn = 'mysql:host=localhost;dbname=aouc';
  #public $user = "root";
  #public $password = "66bird13!";
  #public $localhost_cleardb_url = "mysql://b0b660f29fc63c:e0503ed9@us-cdbr-east-03.cleardb.com/heroku_8e12e35414ca6ea?reconnect=true";
  protected $logger;
  

  public function __construct () {
    $this->logger = new KLogger ( "log.txt" , KLogger::DEBUG );
  }

  private function getConnection () {
    $localhost_cleardb_url = "mysql://b0b660f29fc63c:e0503ed9@us-cdbr-east-03.cleardb.com/heroku_8e12e35414ca6ea?reconnect=true";
    if (!getenv("CLEARDB_DATABASE_URL")){
      putenv("CLEARDB_DATABASE_URL=$localhost_cleardb_url");
    }
    try {
        $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

        $host = $url["host"];
        $db = substr($url["path"],1);
        $user = $url["user"];
        $pass = $url["pass"];
        $connection = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
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

  public function makeUser($email, $password, $favorite_animal) {
    $connection = $this->getConnection();
    try {
      $q = $connection->prepare("insert into users (email, password, favorite_animal, admin) values (:email, :password, :favorite_animal, 0 )");
      $q->bindParam(":email", $email);
      $q->bindParam(":password", $password);
      $q->bindParam(":favorite_animal", $favorite_animal);
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
        $q = $connection->prepare("select count(*) as total from users where email = :email");
        $q->bindParam(":email", $email);
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

  public function getUserEmail($email, $password){
    
    $connection = $this->getConnection();
    try {
      $q = $connection->prepare("select email from users where email = :email and password = :password");
      $q->bindParam(":email", $email);
      $q->bindParam(":password", $password);
      $q->execute();
      $row=$q->fetch();
      $this->logger->LogInfo("user info:" . print_r($row,1) );
      $this->logger->LogInfo("email info:" . print_r($email,1) );
      $this->logger->LogInfo("password info:" . print_r($password,1) );
      return $row;
    }
    catch(Exception $e){
      echo print_r($e, 1);
      exit;
    }
    
    
  }
  public function getUserPassword($email, $password){
    
    $connection = $this->getConnection();
    try {
      $q = $connection->prepare("select password from users where email = :email and password = :password");
      $q->bindParam(":email", $email);
      $q->bindParam(":password", $password);
      $q->execute();
      $row=$q->fetch();
      $this->logger->LogInfo("user info:" . print_r($row,1) );
      $this->logger->LogInfo("email info:" . print_r($email,1) );
      $this->logger->LogInfo("password info:" . print_r($password,1) );
      return $row;
    }
    catch(Exception $e){
      echo print_r($e, 1);
      exit;
    }
    
    
  }

  public function getUserAnimal($email, $password){
    
    $connection = $this->getConnection();
    try {
      $q = $connection->prepare("select favorite_animal from users where email = :email and password = :password");
      $q->bindParam(":email", $email);
      $q->bindParam(":password", $password);
      $q->execute();
      $row=$q->fetch();
      $this->logger->LogInfo("user info:" . print_r($row,1) );
      $this->logger->LogInfo("email info:" . print_r($email,1) );
      $this->logger->LogInfo("password info:" . print_r($password,1) );
      return $row;
    }
    catch(Exception $e){
      echo print_r($e, 1);
      exit;
    }
    
    
  }
}


