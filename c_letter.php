<?php 
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
$_SESSION['comment_table'] = "comments_c";
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <?php include_once 'animal_header.php'; ?>
        <link rel="stylesheet" href="js/c_letter_files/vlb_files1/vlightbox1.css" type="text/css" />
		<link rel="stylesheet" href="js/c_letter_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
        <script src="js/c_letter_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
		<script src="js/c_letter_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>
    </head>
    <h1 id="animal_name" style="font-family: 'Zen Dots', cursive">Canaan Dog</h1>
    <div id=animal_content>
        <img src="Images/canaan_dog.png" alt="canaan dog" id="left_picture">
        <div id="vlightbox1">
	        <a class="vlightbox1" href="js/c_letter_files/vlb_images1/c_middleeast.jpg" title="c_middleeast"><img src="js/c_letter_files/vlb_thumbnails1/c_middleeast.jpg" alt="c_middleeast"/></a>
            <a class="vlightbox1" href="js/c_letter_files/vlb_images1/c_middleeastnotmap.jpg" title="c_middleeastnotmap"><img src="js/c_letter_files/vlb_thumbnails1/c_middleeastnotmap.jpg" alt="c_middleeastnotmap"/></a>
            <span class="vlb"><a href="http://visuallightbox.com">jquery lightbox with video</a>by VisualLightBox.com v6.1</span>
	    </div>
	    <script src="js/c_letter_files/vlb_engine/vlbdata1.js" type="text/javascript"></script>
        <p id=animal_text>
        The canaan dog is located in the Middle East, and like most dogs is an omnivore. There is only 2,000 to 3,000 of this dog throughout the world today, making it relatively uncommon. It is also the national dog of Israel, and was historically used by Bedouins to guard herds and camps. It's a medium sized dog, and has a dense outer coat. Its coat can range in color from black to cream to all shades of brown and red. Canaan dogs are also strongly defensive of their owners, but they aren't aggressive.


        </p>
    </div>
    <?php include_once 'comments_table.php'; ?>
        
    </div>
    <?php include_once 'footer.php'; ?>
</html>