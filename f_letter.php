<?php 
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
$_SESSION['comment_table'] = "comments_f";
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <?php include_once 'animal_header.php'; ?>
        <link rel="stylesheet" href="js/f_letter_files/vlb_files1/vlightbox1.css" type="text/css" />
		<link rel="stylesheet" href="js/f_letter_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
        <script src="js/f_letter_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
		<script src="js/f_letter_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>
    </head>
    <h1 id="animal_name" style="font-family: 'Zen Dots', cursive">False Killer Whale</h1>
    <div id=animal_content>
        <img src="Images/false_killer_whale.png" alt="false killer whale" id="left_picture">
        <div id="vlightbox1">
            <a class="vlightbox1" href="js/f_letter_files/vlb_images1/f_map.jpg" title="f_map"><img src="js/f_letter_files/vlb_thumbnails1/f_map.jpg" alt="f_map"/></a>
            <a class="vlightbox1" href="js/f_letter_files/vlb_images1/f_nature.jpg" title="f_nature"><img src="js/f_letter_files/vlb_thumbnails1/f_nature.jpg" alt="f_nature"/></a>
            <span class="vlb"><a href="http://visuallightbox.com">jquery lightbox with video</a>by VisualLightBox.com v6.1</span>
        </div>
	<script src="js/f_letter_files/vlb_engine/vlbdata1.js" type="text/javascript"></script>
        <p id=animal_text>
        The false killer whale lives in oceans worldwide, however it prefers tropical regions. Its diet consists mostly of fish, since fish are in the ocean. Its name comes from its apperance resembling a killer whale, but it is actually a dolphin. It is partically fond of eating squid, and it eats 3.4% to 4.3% of its weight in fish a day just like your mom. In capativity, the false killer whale has shown to be quite adaptable compared to other dolphin species, and it sometimes even offers humans its fish.

        </p>
    </div>
    <?php include_once 'comments_table.php'; ?>
        
    </div>
    <?php include_once 'footer.php'; ?>

</html>