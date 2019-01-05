<?php

if(isset($_SESSION['username']) and isset($_SESSION['class'])) {
    
  $sessionuser = $_SESSION['username'];
  $sessionclass = $_SESSION['class'];
  $sessionfullname = $_SESSION['fullname'];
  $loggedin = 1;
    
} else { 
    
  $sessionuser = $sessionclass = $sessionfullname = "";
  $loggedin = 0;
        
}

if($sessionclass == 'admin') {

  include($_SERVER['DOCUMENT_ROOT'] . '/html/nav-admin.html');

} else {

  include($_SERVER['DOCUMENT_ROOT'] . '/html/navbar.html');

}

$getsettings = "SELECT * FROM settings WHERE id=1";
$settings = $mysqli->query($getsettings);
$settings = $settings->fetch_assoc();

?>