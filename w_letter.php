<?php 
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
$_SESSION['comment_table'] = "comments_w";
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <?php include_once 'animal_header.php'; ?>
    </head>
    <h1 id="animal_name" style="font-family: 'Zen Dots', cursive">Wolverine</h1>
    <div id=animal_content>
        <img src="Images/wolverine.png" alt="wolverine" id="left_picture">
        <p id=animal_text>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
            in culpa qui officia deserunt mollit anim id est laborum. 
        </p>
        <img src="Images/world_map.jpg" alt="aouc logo" id="right_picture">
    </div>
    <?php include_once 'comments_table.php'; ?>
        
    </div>
    <?php include_once 'footer.php'; ?>
</html>