<?php 
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
$_SESSION['comment_table'] = "comments_k";
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <?php include_once 'animal_header.php'; ?>
        <link rel="stylesheet" href="js/k_letter_files/vlb_files1/vlightbox1.css" type="text/css" />
		<link rel="stylesheet" href="js/k_letter_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
        <script src="js/k_letter_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
		<script src="js/k_letter_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>
    </head>
    <h1 id="animal_name" style="font-family: 'Zen Dots', cursive">Kudu</h1>
    <div id=animal_content>
        <img src="Images/kudu.png" alt="kudu" id="left_picture">
        <div id="vlightbox1">
            <a class="vlightbox1" href="js/k_letter_files/vlb_images1/k_map.jpg" title="k_map"><img src="js/k_letter_files/vlb_thumbnails1/k_map.jpg" alt="k_map"/></a>
            <a class="vlightbox1" href="js/k_letter_files/vlb_images1/k_nature.jpg" title="k_nature"><img src="js/k_letter_files/vlb_thumbnails1/k_nature.jpg" alt="k_nature"/></a>
            <span class="vlb"><a href="http://visuallightbox.com">jquery lightbox with video</a>by VisualLightBox.com v6.1</span>
	</div>
	<script src="js/k_letter_files/vlb_engine/thumbscript1.js" type="text/javascript"></script>
	<script src="js/k_letter_files/vlb_engine/vlbdata1.js" type="text/javascript"></script>
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