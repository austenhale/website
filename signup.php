<?php session_start(); ?>
<html>
<link rel="stylesheet" href="submit_style.css">
<a href="home.php"><p id="returnHome">Return to home</p></a>
<h1>Welcome!</h1>
<h2>Submit form data below to sign up for aoua!</h2>

<div class="container">

        
    <form class="modal-content" method="post" action="signup_handler.php">
             <?php if (isset($_SESSION['messages'])){
                    echo "<div id=invalid_signup>Invalid email address format</div>";   
            }
            unset($_SESSION['messages']); 
            ?>
            <label for="email"><span style="color: red">*</span><strong>Email: </strong></label>
            <input type="text" id="email" name="email" required placeholder="Email">
            <hr>
            <label for="password" id="password_txt"><span style="color: red">*</span><strong>Password: </strong></label>
            <input type="password" id="password" name="password" required placeholder="Password">
            <hr>
            <label for="password"><span style="color: red">*</span><strong>Repeat Password:</strong></label> 
            <input type="password" id="password" name="password" required placeholder="Repeat password">
            <hr>
            <label for="favoriteAnimal"><strong>Favorite Animal: </strong></label>
            <input type="text" id="favoriteAnimal" name="favoriteAnimal" placeholder="Favorite animal">
            <hr>
            <p id="submit_subtext"><span style="color: red">*</span>are required.</p>
            <input type="submit" value="Submit" id="signup_submit">
    </form>

</div>
