
<?php
$mysqli = new mysqli("localhost", "root", "Sebb840917", "blog");
if($mysqli->connect_error) {
  exit('Error connecting to database');
}
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli->set_charset("utf8mb4");
?>