<?php

session_start();
require($_SERVER['DOCUMENT_ROOT'] . '/includes/connect.php');

if(isset($_POST['heroimage']) and !empty($_POST['heroimage'])) {
    $value = $_POST['heroimage'];
    $stmt = "UPDATE settings SET heroimage = '$value' WHERE id = 1";

    $mysqli->query($stmt);

    echo "Uppdaterade Hero Image<br>";
}
if(isset($_POST['bildrubrik']) and !empty($_POST['bildrubrik'])) {
    $value = $_POST['bildrubrik'];
    $stmt = "UPDATE settings SET herotext = '$value' WHERE id = 1";

    $mysqli->query($stmt);

    echo "Uppdaterade Huvudrubrik<br>";
}
if(isset($_POST['litenbildrubrik']) and !empty($_POST['litenbildrubrik'])) {
    $value = $_POST['litenbildrubrik'];
    $stmt = "UPDATE settings SET herotextsmall = '$value' WHERE id = 1";

    $mysqli->query($stmt);

    echo "Uppdaterade Underrubrik<br>";
}
if(isset($_POST['youtube']) and !empty($_POST['youtube'])) {
    $value = $_POST['youtube'];
    $stmt = "UPDATE settings SET youtube = '$value' WHERE id = 1";

    $mysqli->query($stmt);

    echo "Uppdaterade Youtubelänk<br>";
}
if(isset($_POST['instagram']) and !empty($_POST['instagram'])) {
    $value = $_POST['instagram'];
    $stmt = "UPDATE settings SET instagram = '$value' WHERE id = 1";

    $mysqli->query($stmt);

    echo "Uppdaterade Instagramlänk<br>";
}
if(isset($_POST['twitter']) and !empty($_POST['twitter'])) {
    $value = $_POST['twitter'];
    $stmt = "UPDATE settings SET twitter = '$value' WHERE id = 1";

    $mysqli->query($stmt);

    echo "Uppdaterade Twitterlänk<br>";
}
if(isset($_POST['facebook']) and !empty($_POST['facebook'])) {
    $value = $_POST['facebook'];
    $stmt = "UPDATE settings SET facebook = '$value' WHERE id = 1";

    $mysqli->query($stmt);

    echo "Uppdaterade Facebooklänk<br>";
}
if(isset($_POST['profilbild']) and !empty($_POST['profilbild'])) {
    $value = $_POST['profilbild'];
    $stmt = "UPDATE settings SET profilbild = '$value' WHERE id = 1";

    $mysqli->query($stmt);

    echo "Uppdaterade Profilbild<br>";
}
if(isset($_POST['about']) and !empty($_POST['about'])) {
    $value = $_POST['about'];
    $stmt = "UPDATE settings SET about = '$value' WHERE id = 1";

    $mysqli->query($stmt);

    echo "Uppdaterade Om mig<br>";
}

$mysqli->close();
echo "<script>setTimeout(function() { window.location = 'admin.php'; }, 2000);</script>";

?>