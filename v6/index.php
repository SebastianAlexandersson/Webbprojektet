<?php 

session_start();
require($_SERVER['DOCUMENT_ROOT'] . '/includes/connect.php');
require($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php');
require($_SERVER['DOCUMENT_ROOT'] . '/includes/pagination.php');
include($_SERVER['DOCUMENT_ROOT'] . '/html/hero-image.html');

$sql = "SELECT * FROM post ORDER BY id DESC LIMIT $offset, $no_of_records_per_page";
$result = $mysqli->query($sql);

$regex = "|[-a-zA-Z0-9@:%_\+.~\#?&//=]{2,256}\.[a-z]{2,4}\b(?:\/[-a-zA-Z0-9@:%_\+.~\#?&//=]*)?|";

while ($row = $result->fetch_assoc()) {

    echo "
    <article>
        <div class='post-box-small'>
            <div class='row'>
                <div class='img-container'>
                    <a href='/includes/blogpost.php?id=". $row['id'] ."'>
                    <img src='". $row['bild'] ."' alt='". $row['bildtext'] ."'>
                    </a>
                </div>
            </div>
            <div class='row'>
                <h2>". $row['rubrik'] ."</h2>
            </div>
            <div class='row'>
                <p>". preg_replace($regex, '<a class="links" href="$0">$0</a>', $row['huvudtext']) ."</p>
            </div>
            <div class='row'>
                <div class='poster'>
                <span>". $row['poster'] ."</span>
                <span>". $row['datum'] ."</span>
                </div>
                <a href='/includes/blogpost.php?id=". $row['id'] ."' class='align-right post-button'>
                Läs mer
                </a>
            </div>
        </div>
    </article>
        ";

}

include($_SERVER['DOCUMENT_ROOT'] . '/html/pagination.html'); 
include($_SERVER['DOCUMENT_ROOT'] . '/html/scripts.html'); 

?>



