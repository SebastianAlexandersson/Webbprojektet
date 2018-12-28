<?php 

session_start();
require($_SERVER['DOCUMENT_ROOT'] . '/includes/connect.php');
require($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php');
include($_SERVER['DOCUMENT_ROOT'] . '/html/hero-image.html');

$sql = "SELECT * FROM post ORDER BY id DESC";
$result = $mysqli->query($sql);

while ($row = $result->fetch_assoc()) {

    echo "
    <div class='wrapper-row'>
        <div class='post-box-small'>
            <div class='row'>
                <div class='img-container'>
                    <a href='/includes/blogpost.php?id=". $row['id'] ."'>
                    <img src='". $row['bild'] ."' alt='". $row['bildtext'] ."'>
                    </a>
                </div>
            </div>
            <div class='row'>
                <h1>". $row['rubrik'] ."</h1>
            </div>
            <div class='row'>
                <p>". $row['huvudtext'] ."</p>
            </div>
            <div class='row'>
                <span>". $row['poster'] ."</span>
                <span>". $row['datum'] ."</span>
                <a href='/includes/blogpost.php?id=". $row['id'] ."' class='align-right'>
                <button class='button'>Läs mer</button>
                </a>
            </div>
        </div>
    </div>
        ";

}

include($_SERVER['DOCUMENT_ROOT'] . '/html/scripts.html'); 

?>



