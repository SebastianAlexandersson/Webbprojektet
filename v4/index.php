<?php 

session_start();
require('connect.php');
require('functions.php');
include('navbar.html');
include('hero-image.html');

$sql = "SELECT * FROM post ORDER BY id DESC";
$result = $mysqli->query($sql);

while ($row = $result->fetch_assoc()) {

echo "

<div class='wrapper-row'>
    <div class='post-box' id='postBox'>
        <div class='post-box-img-container' id='postBoxImgContainer'><img src='adult-beautiful-blur-374703.jpg' id='postImg' alt='En bild' class='post-img'></div>
        <h1 class='post-rubrik' id='postRubrik'>" . $row['rubrik'] .  "</h1>
        <p class='post-text' id='postText'>" . $row['huvudtext'] . "</p>
        <div class='post-footer' id='post-footer'>
            <ul class='footer-list'>
                <li><span id='posterId'>" . $row['poster'] . "</span></li> 
                <li><span class='datum' id='theDate'>" . $row['datum'] . "</span></li>
                <li><button class='button'>Läs mer</button></li>
            </ul>
        </div>
    </div>
</div>

";

}

include('scripts.html'); 

?>



