<?php

session_start();

require('connect.php');

if(isset($_SESSION['username']) and isset($_SESSION['class'])) {
    
    $sessionuser = $_SESSION['username'];
    $sessionclass = $_SESSION['class'];
    $loggedin = 1;

}

include('navbar.html');

?>

<div class="wrapper-row">
    <div class="post-form">
        <form name="post-form" method="POST" action="post.php" id="post-form" enctype="multipart/form-data">
            <div class="row rubrik-bakgrund">
                <h1>Skapa bloginlägg</h1>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="rubrik">Rubrik</label>
                </div>
                <div class="col-70">
                    <input type="text" name="rubrik" id="rubrik" placeholder="Rubrik.." required>
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="huvudtext">Text</label>
                </div>
                <div class="col-70">
                    <textarea form="post-form" name="huvudtext" id="huvudtext" placeholder="Text här.."></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-30">
                    <label for="bildupload">Länka bild</label>
                </div>
                <div class="col-70">
                    <input type="text" name="bildupload" id="bildupload">
                </div>
            </div>
            <div class="row submit">
                <input type="submit" class="submit-knapp" value="Skicka">
            </div>
        </form>
    </div>
</div>

<?php include('scripts.html'); ?>