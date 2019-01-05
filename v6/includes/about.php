<?php 

session_start();
require($_SERVER['DOCUMENT_ROOT'] . '/includes/connect.php');
require($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php');
include($_SERVER['DOCUMENT_ROOT'] . '/html/hero-image.html'); 

$about = nl2br($settings['about']);

echo "
<div class='post-box-big'>
<div class='row'>
    <h1>Om mig</h1>
</div>
<div class='row'>
    <div class='img-container'>
        <img alt='Profilbild' src='" . $settings['profilbild'] . "'>
    </div>
</div>
<div class='row'>
    <p>" . $about . "</p>
</div>
</div>
    ";


include($_SERVER['DOCUMENT_ROOT'] . '/html/scripts.html'); 

?>