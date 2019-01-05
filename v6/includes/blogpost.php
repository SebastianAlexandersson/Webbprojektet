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
$regex = "|[-a-zA-Z0-9@:%_\+.~\#?&//=]{2,256}\.[a-z]{2,4}\b(?:\/[-a-zA-Z0-9@:%_\+.~\#?&//=]*)?|";

$huvudtext = nl2br($row['huvudtext']);



echo "
    <div class='post-box-big'>
        <div class='row'>
            <h1>". $row['rubrik'] ."</h1>
        </div>
        <div class='row'>
            <span>". $row['poster'] ."</span>
            <span class='align-right'>". $row['datum'] ."</span>
        </div>
        <div class='row'>
            <div class='img-container' id='img'>
                <img src='". $row['bild'] ."' alt='". $row['bildtext'] ."' id='modal-image'>
            </div>
        </div>
        <div class='row'>
            <p>". preg_replace($regex, '<a class="links" href="$0">$0</a>', $huvudtext) ."</p> 
        </div>
    </div>
";

echo "

<div class='modal' id='modal'>
    <button class='modal-close-button' id='modal-close-button'>X</button>
    <div class='modal-content'>
        <div class='img-container'>
            <img src='". $row['bild'] ."' alt='". $row['bildtext'] ."'>
        </div>
        <p>". $row['bildtext'] ."</p>
    </div>
</div>

";

include($_SERVER['DOCUMENT_ROOT'] . '/html/scripts.html'); 

?>