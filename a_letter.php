<?php 
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
$_SESSION['comment_table'] = "comments_a";
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
       <?php include_once 'animal_header.php'; ?>
    </head>
    <h1 id="animal_name">African Civet</h1>
    <div id=animal_content>
        <img src="Images/african_civet.jpg" alt="african_civet" id="left_picture">
        
        <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="Images/saharan_africa.png" alt="aouc logo" id="right_picture">
            </div>
            <div class="mySlides fade">
                <img src="Images/saharan_env.jfif" alt="saharan" id="right_picture">
            </div>
        </div>
        
        <script src="js/slideshow.js"></script>
        <p id=animal_text>
            The african civet is a nocturnal animal found in Saharan Africa. It will generally
            try to eat anything that it finds; whether it be plants or other animals. It's fur
            color can be anything from white to yellow to red, with dark brown or black stripes.
            Their face looks similar to that of a raccoon. The main way they find food is through
            the use of smell and sound, as opposed to relying on sight.
        </p>
    </div>
    

    <?php include_once 'comments_table.php'; ?>
    </div>
    <?php include_once 'footer.php'; ?>
</html>