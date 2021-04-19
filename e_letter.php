<?php 
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
$_SESSION['comment_table'] = "comments_e";
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <?php include_once 'animal_header.php'; ?>
        <link rel="stylesheet" href="js/e_letter_files/vlb_files1/vlightbox1.css" type="text/css" />
		<link rel="stylesheet" href="js/e_letter_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
        <script src="js/e_letter_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
		<script src="js/e_letter_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>
    </head>
    <h1 id="animal_name" style="font-family: 'Zen Dots', cursive">Elephant Shrew</h1>
    <div id=animal_content>
        <img src="Images/elephant_shrew.png" alt="elephant shrew" id="left_picture">
        <div id="vlightbox1">
            <a class="vlightbox1" href="js/e_letter_files/vlb_images1/e_africa.jpg" title="e_africa"><img src="js/e_letter_files/vlb_thumbnails1/e_africa.jpg" alt="e_africa"/></a>
            <a class="vlightbox1" href="js/e_letter_files/vlb_images1/e_nature.jpg" title="e_nature"><img src="js/e_letter_files/vlb_thumbnails1/e_nature.jpg" alt="e_nature"/></a>
            <span class="vlb"><a href="http://visuallightbox.com">jquery lightbox with video</a>by VisualLightBox.com v6.1</span>
        </div>
	<script src="js/e_letter_files/vlb_engine/thumbscript1.js" type="text/javascript"></script>
	<script src="js/e_letter_files/vlb_engine/vlbdata1.js" type="text/javascript"></script>
        <p id=animal_text>
        The elephant shrew is located in Africa, and it mainly eats bugs. Although elephant shrews are incredibly tiny, they are extraordinary fast, being able to reach speeds of 17.9mphs. They also possess the ability to twist their trunk, similar to elephants. Sadly, elephant shrews only live for 2-4 years. They are also diurnal and not highly social, although they do live in monogamous pairs.
        </p>
    </div>
    <?php include_once 'comments_table.php'; ?>
        
    </div>
    <?php include_once 'footer.php'; ?>
</html>