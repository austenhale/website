<?php 
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
$_SESSION['comment_table'] = "comments_d";
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <?php include_once 'animal_header.php'; ?>
        <link rel="stylesheet" href="js/d_letter_files/vlb_files1/vlightbox1.css" type="text/css" />
		<link rel="stylesheet" href="js/d_letter_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
        <script src="js/d_letter_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
		<script src="js/d_letter_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>
    </head>
    <h1 id="animal_name" style="font-family: 'Zen Dots', cursive">Dhole</h1>
    <div id=animal_content>
        <img src="Images/dhole.png" alt="dhole" id="left_picture">
        <div id="vlightbox1">
            <a class="vlightbox1" href="js/d_letter_files/vlb_images1/d_sea.jpg" title="d_sea"><img src="js/d_letter_files/vlb_thumbnails1/d_sea.jpg" alt="d_sea"/></a>
            <a class="vlightbox1" href="js/d_letter_files/vlb_images1/d_seanature.jpg" title="d_seanature"><img src="js/d_letter_files/vlb_thumbnails1/d_seanature.jpg" alt="d_seanature"/></a>
            <span class="vlb"><a href="http://visuallightbox.com">jquery lightbox with video</a>by VisualLightBox.com v6.1</span>
	    </div>
	<script src="js/d_letter_files/vlb_engine/vlbdata1.js" type="text/javascript"></script>
        <p id=animal_text>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate 
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt 
            in culpa qui officia deserunt mollit anim id est laborum. 
        </p>
    </div>
    <?php include_once 'comments_table.php'; ?>
        
    </div>
    <?php include_once 'footer.php'; ?>
</html>