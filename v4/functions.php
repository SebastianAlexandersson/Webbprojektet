<?php

if(isset($_SESSION['username']) and isset($_SESSION['class'])) {
    
  $sessionuser = $_SESSION['username'];
  $sessionclass = $_SESSION['class'];
  $loggedin = 1;
    
} else { 
    
  $sessionuser = $sessionclass = "";
  $loggedin = 0;
        
}

if($sessionclass == 'admin') {

  echo "<script>window.location = 'admin.php'</script>";

}

?>