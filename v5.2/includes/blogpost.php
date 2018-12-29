<?php 

session_start();
require($_SERVER['DOCUMENT_ROOT'] . '/includes/connect.php');
require($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php');
include($_SERVER['DOCUMENT_ROOT'] . '/html/hero-image.html'); 

$id = $_GET['id'];

$sql = "SELECT * FROM post WHERE id = $id";
$result = $mysqli->query($sql);
$row = $result->fetch_assoc();
$mysqli->close();

$huvudtext = nl2br($row['huvudtext']);

echo "
<div class='wrapper-row'>
    <div class='post-box-big'>
        <div class='row'>
            <h1>". $row['rubrik'] ."</h1>
        </div>
        <div class='row'>
            <span>". $row['poster'] ."</span>
            <span class='align-right'>". $row['datum'] ."</span>
        </div>
        <div class='row'>
            <div class='img-container'>
                <img src='". $row['bild'] ."' alt='". $row['bildtext'] ."'>
            </div>
        </div>
        <div class='row'>
            <p>". $huvudtext ."</p> 
        </div>
    </div>
</div>
";

include($_SERVER['DOCUMENT_ROOT'] . '/html/scripts.html'); 

?>