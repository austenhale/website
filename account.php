<html>
<link rel="stylesheet" href="style.css">
<script type='text/javascript'src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>

<script src='js/form_animal_appear.js'></script>
<script src='js/form_password_appear.js'></script>
<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['last_page'] = $_SESSION['current_page'];
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
include_once 'header.php'; 
$_SESSION['current_page'] = $_SESSION['last_page'];



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
    if (isset($_SESSION['changedPassword']) ){
        foreach ($_SESSION['changedPassword'] as $messages)
          echo "<div class=success_messages>$messages</div>";  
        }
        unset($_SESSION['changedPassword']);
    if (isset($_SESSION['passwordMismatch']) ){
        foreach ($_SESSION['passwordMismatch'] as $messages)
            echo "<div class=failure_messages>$messages</div>";
        }
        unset($_SESSION['passwordMismatch']);
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
        Password: <?php echo $password;?> <br> 
        <?php
        echo "<div class='showPassword'>
                <a href=# class='changePassword'><em>Change password</em></a>
                <div class='form'>
                    <form class=password_form method=post action=password_handler.php>
                        <label for=password id=password_txt><span style='color: red'>*</span><strong>New Password: </strong></label>
                        <input type=password id=password name=password required placeholder='New password' />
                        <br>
                        <label for=password><span style='color: red'>*</span><strong>Repeat New Password:</strong></label> 
                        <input type=password id=repeatPassword name=repeatPassword required placeholder='Repeat new password'/>
                        <br>
                        <input type='submit' value=Submit id=password_submit>
                    </form>
                    
                </div>
            </div>";
        ?>    
        <br>
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
                    </form>
                </div>
            </div>";
        } ?>
    </p>
</div>

</html>
        