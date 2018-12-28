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
<div class='post-box-2'>
    <h1 class='post-rubrik-2'>" . $row['rubrik'] . "</h1>
    <div class='post-footer' id='post-footer'>
        <ul class='footer-list'>   
            <li><img src='https://picsum.photos/25/25' alt='Användarbild' id='userImg' class='user-img'></li>
            <li><span id='posterId'>" . $row['poster'] . "</span></li> 
            <li><span class='datum' id='theDate'>" . $row['datum'] . "</span></li>
        </ul>
    </div>
    <div class='post-box-img-container'><img src='/images/adult-beautiful-blur-374703.jpg' alt='En bild' class='post-img'></div>
    <p>" . $huvudtext . "</p>
</div>
</div>

    ";








include($_SERVER['DOCUMENT_ROOT'] . '/html/scripts.html'); 

?>