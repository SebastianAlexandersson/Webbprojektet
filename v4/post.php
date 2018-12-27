<?php
session_start();
require('connect.php');

if(isset($_POST) and $_SESSION['class'] == 'admin') {

$poster = $_SESSION['fullname'];
$rubrik = $_POST['rubrik'];
$huvudtext = $_POST['huvudtext'];
$bild = $_POST['bildupload'];
$datum = date("j F Y");

$stmt = $mysqli->prepare("INSERT INTO post (rubrik, huvudtext, bild, datum, poster) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $rubrik, $huvudtext, $bild, $datum, $poster);
$stmt->execute();
$stmt->close();

$mysqli->close(); 

echo "Allt gick som det skulle, skickar tillbaka dig till adminsidan om 3 sek.";
echo "<script>setTimeout(function() { window.location = 'admin.php'; }, 3000);</script>";

}

?>