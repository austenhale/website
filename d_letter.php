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
        The dhole is located in Asia. It has an omnivore diet. The dhole is a highly social animal, living in clans with other dholes. Unfortunately, the dhole is considered endangered as there are less than 2,500 adults living today. In apperance, the dhole looks similar to a gray wolf and a red fox, but it has also been described as cat like. The dhole can also make a whistle sound, similar to the whistle of a red fox. The dhole has a reddish fur coat. For living, the dhole creates 4 different types of dens: earth dens, complex earth dens (dens with more than one entrance), simple cavernous dens, and complex cavernous dens.

        </p>
    </div>
    <?php include_once 'comments_table.php'; ?>
        
    </div>
    <?php include_once 'footer.php'; ?>
</html>