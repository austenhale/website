<?php session_start(); ?>
<html>
<link rel="stylesheet" href="submit_style.css">
<a href="home.php"><p id="returnHome">Return to home</p></a>
<h1>Welcome!</h1>
<h2>Submit form data below to sign up for aoua!</h2>

<div class="container">

        
    <form class="modal-content" method="post" action="signup_handler.php">
             <?php if (isset($_SESSION['messages'])){
                 foreach ($_SESSION['messages'] as $message){
                    echo "<div id=invalid_signup>$message</div>";  
                 }   
            }
            unset($_SESSION['messages']); 
            $_SESSION['email'] = isset($_SESSION['email']) ? $_SESSION['email'] : "Email";
            $_SESSION['favoriteAnimal'] = isset($_SESSION['favoriteAnimal']) ? $_SESSION['favoriteAnimal'] : "FavoriteAnimal";
            ?>
            <?php if (strcmp($_SESSION['email'], "Email") == 0){
                echo "<label for=email><span class=redclass>*</span><strong>Email: </strong></label>
                <input type=text id=email name=email required placeholder=$_SESSION[email]";
            } else {
                echo "<label for=email><span style=color: red>*</span><strong>Email: </strong></label>
            <input type=text id=email name=email value= $_SESSION[email]";
            }
            ?>
            <hr>
            <label for="password" id="password_txt"><span style="color: red">*</span><strong>Password: </strong></label>
            <input type="password" id="password" name="password" required placeholder="Password">
            <hr>
            <label for="password"><span style="color: red">*</span><strong>Repeat Password:</strong></label> 
            <input type="password" id="repeatPassword" name="repeatPassword" required placeholder="Repeat password">
            <hr>
            <?php if (strcmp($_SESSION['favoriteAnimal'], "FavoriteAnimal") == 0){
                echo "<label for=favoriteAnimal><strong>Favorite Animal: </strong></label>
                <input type=text id=favoriteAnimal name=favoriteAnimal placeholder='Favorite animal'>";
            } else {
                echo "<label for=favoriteAnimal><strong>Favorite Animal: </strong></label>
                <input type=text id=favoriteAnimal name=favoriteAnimal value=$_SESSION[favoriteAnimal]>";
            }
            ?>
            <hr>
            <p id="submit_subtext"><span style="color: red">*</span>are required.</p>
            <input type="submit" value="Submit" id="signup_submit">
    </form>

</div>
