<html>
<link rel="stylesheet" href="style.css">
<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
echo "<form class=animal_form method=post action=animal_handler.php>";
echo "<label for=favoriteAnimal><strong>Favorite Animal: </strong></label>
    <input type=text id=favoriteAnimal name=favoriteAnimal placeholder='Favorite animal'>";
?>
