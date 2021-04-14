
<?php 
session_start();
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
$_SESSION['comment_table'] = "comments_a";
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
		
        <link rel="stylesheet" href="js/a_letter_files/vlb_files1/vlightbox1.css" type="text/css" />
		<link rel="stylesheet" href="js/a_letter_files/vlb_files1/visuallightbox.css" type="text/css" media="screen" />
        <script src="js/a_letter_files/vlb_engine/jquery.min.js" type="text/javascript"></script>
		<script src="js/a_letter_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>

       <?php include_once 'animal_header.php'; ?>
    </head>
    <h1 id="animal_name" style="font-family: 'Zen Dots', cursive">African Civet</h1>
    <body>
    <div id="page">
    <div id="animal_content">
        <img src="Images/african_civet.jpg" alt="african_civet" id="left_picture">
        

    <div id="vlightbox1">
	    <a class="vlightbox1" href="js/a_letter_files/vlb_images1/saharan_env.jpg" title="saharan_env"><img src="js/a_letter_files/vlb_thumbnails1/saharan_env.jpg" alt="saharan_env"/></a>
        <a class="vlightbox1" href="js/a_letter_files/vlb_images1/saharan_africa.jpg" title="saharan_africa"><img src="js/a_letter_files/vlb_thumbnails1/saharan_africa.jpg" alt="saharan_africa"/></a>
    <span class="vlb"><a href="http://visuallightbox.com">jquery lightbox with video</a>by VisualLightBox.com v6.1</span>
	</div>
	<script src="js/a_letter_files/vlb_engine/vlbdata1.js" type="text/javascript"></script>
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
    </div>
    </body>
</html>