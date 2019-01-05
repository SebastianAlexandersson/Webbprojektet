<?php

session_start();

require($_SERVER['DOCUMENT_ROOT'] . '/includes/connect.php');
require($_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php');


if ($sessionclass =! 'admin') {

    echo "<script>window.location: '/index.php';";
}

?>

<div class='wrapper'>
<div class='column'>
    <div class='row'>
    <h1>Nytt inlägg</h1>
    </div>
    <div class='post-form-box utility-box'>
        <form name='post-form' method='POST' action='post.php' id='post-form' class='form'>
            <div class='row'>
                <h5>Skapa bloginlägg</h5>
            </div>
            <div class='row'>
                <label for='rubrik'>Rubrik</label>
                <input type='text' name='rubrik' id='rubrik' placeholder='Skriv rubrik här..' required>

                <label for='huvudtext'>Innehåll</label>
                <textarea form='post-form' name='huvudtext' id='huvudtext' placeholder='Länkar, bilder, text etc formateras med html'></textarea>

                <label for='bildupload'>Välj bild</label>
                <input type='text' name='bildupload' id='bildupload' placeholder='Länk till bild..'>

                <label for='bildtext'>Bildtext</label>
                <input type='text' name='bildtext' id='bildtext' placeholder='Beskriv bild..'>
                <input type='submit' class='submit-knapp' value='Skicka'>
            </div>
        </form>
    </div>
    <div class='row'>
    <h1>Inställningar</h1>
    </div>
    <div class='post-form-box utility-box'>
        <div class='row'>
            <h5>Inställningar</h5>
        </div>
        <div class='row'>
        <form method='POST' action='settings.php' class='form' name='settingsform' id='settingsform'>
            
            <label for='heroimage'>Välj en bild för framsidan</label>
            <input type='text' name='heroimage' id='heroimage' placeholder='Länk till bild..'>

            <label for='bildrubrik'>Rubrik som visas över bilden</label>
            <input type='text' name='bildrubrik' id='bildrubrik'>

            <label for='litenbildrubrik'>Underrubrik som visas över bilden</label>
            <input type='text' name='litenbildrubrik' id='litenbildrubrik'>

            <label for='youtube'>Länka din Youtube. # för att inte visa länk.</label>
            <input type='text' name='youtube' id='youtube'>

            <label for='instagram'>Länka din Instagram. # för att inte visa länk.</label>
                <input type='text' name='instagram' id='instagram'>

            <label for='twitter'>Länka din Twitter. # för att inte visa länk.</label>
            <input type='text' name='twitter' id='twitter'>

            <label for='facebook'>Länka din Facebook. # för att inte visa länk.</label>
            <input type='text' name='facebook' id='facebook'>

            <label for='profilbild'>Välj profilbild</label>
            <input type='text' name='profilbild' placeholder='Länk till bild..' id='profilbild'>

            <label for='about'>Välj vad som ska stå på sidan <i>Om mig</i></label>
            <textarea form='settingsform' name='about' placeholder='Länkar, bilder, text etc formateras med html' id='about'></textarea>

            <input type='submit' class='submit-knapp' value='Skicka'>
        </form>
        </div>
    </div>


<?php include($_SERVER['DOCUMENT_ROOT'] . '/html/scripts.html'); ?>