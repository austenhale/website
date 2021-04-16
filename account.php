<html>
<link rel="stylesheet" href="style.css">
<script type='text/javascript'src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script src='js/form_appear.js'></script>
<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['last_page'] = $_SESSION['current_page'];
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
include_once 'header.php'; 



    if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']){
        header('Location: home.php');
        exit;
    }
    echo "<div id=message_wrapper>";
    if (isset($_SESSION['changedAnimal']) ){
    foreach ($_SESSION['changedAnimal'] as $messages)
      echo "<div class=success_messages>$messages</div>";  
    }
    unset($_SESSION['changedAnimal']);
    echo "</div>";
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
        Password: <?php echo $password;?> <br> <a href="changePassword.php"><em>Change password</em></a><br>
        Favorite Animal: 
        <?php if (strcmp($rowAnimal[0], null) == 0 ) {
            echo "None";
            echo "<br> <div id=showAnimal><a href=changeAnimal.php><em>Change animal</em></a></div>";
        }else {
            echo $rowAnimal[0];
            echo "<br> <div class='showAnimal'>
                <a href=# class='changeAnimal'><em>Change animal</em></a>
                <div class='form'>
                    <form class=animal_form method=post action=animal_handler.php>
                    <label for=favoriteAnimal><strong>Change Favorite Animal: </strong></label>
                    <input type=text id=favoriteAnimal name=favoriteAnimal placeholder='Favorite animal'/>
                </div>
            </div>";
        } ?>
    </p>
</div>

</html>
        