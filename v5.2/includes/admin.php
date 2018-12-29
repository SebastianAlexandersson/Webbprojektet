<?php

session_start();

require($_SERVER['DOCUMENT_ROOT'] . '/includes/connect.php');
require($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php');


if ($sessionclass =! 'admin') {

    echo "<script>window.location: '/index.php';";
}

?>

<div class='wrapper-row'>
    <div class='post-form-box utility-box'>
        <form name='post-form' method='POST' action='post.php' id='post-form' class='form'>
            <div class='row'>
                <h5>Skapa bloginlägg</h5>
            </div>
            <div class='row'>
                <input type='text' name='rubrik' id='rubrik' placeholder='Rubrik här..' required>
                <textarea form='post-form' name='huvudtext' id='huvudtext' placeholder='Text här..'></textarea>
                <input type='text' name='bildupload' id='bildupload' placeholder='Länk till bild..'>
                <input type='text' name='bildtext' id='bildtext' placeholder='Beskriv bild..'>
                <input type='submit' class='submit-knapp' value='Skicka'>
            </div>
        </form>
    </div>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/html/scripts.html'); ?>