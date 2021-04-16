<html>
<head>
    <title>Alphabet of Unusual Animals</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="Images/aouc.png">
</head>
<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
include_once 'header.php'; 
?>
    <div>
        <h1 id="welcome"><Strong>Welcome!</Strong></h1>
        <br>
        <h2 id="letter_selection">Select a letter to learn about an animal.</h2>
    </div>
    
</body>

<div id="footer">
    <p id="footer_text">AOUA made by Austen, 2021. All rights reserved</p>
</div>
</html>