<?php session_start();
    if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']){
        header('Location: home.php');
        exit;
    }
    require_once 'Dao.php';
    $email = isset($_SESSION['email']) ? $_SESSION['email'] : "nouser";
    $password = isset($_SESSION['password']) ? $_SESSION['password'] : ""; 
    $salt = "aocj;l!!!akjfp8pq8980q4p;hlafidhjspc8q923on_169";
    $saltPassword = hash("sha256", $salt."pepper123!#@$".$password); 
    $dao = new Dao();
    $rowEmail = $dao->getUserEmail($email, $saltPassword);
    $rowPass = $dao->getUserPassword($email, $saltPassword);
    $rowAnimal = $dao->getUserAnimal($email, $saltPassword);?>
<div id="accountInfo">
    <p>
        Username: <?php echo $rowEmail[0];?> <br>
        Password: <?php echo $password;?> <br>
        Favorite Animal: 
        <?php if (strcmp($rowAnimal[0], null) == 0 ) {
            echo "None";
        }else {
            echo $rowAnimal[0];
        } ?>
    </p>
</div>


        