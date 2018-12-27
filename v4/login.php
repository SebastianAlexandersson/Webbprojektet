<?php
session_start();
require('connect.php');
if (isset($_POST['username']) and isset($_POST['password'])){

$username = trim(htmlspecialchars($_POST['username']));
$password = trim(htmlspecialchars($_POST['password']));

$stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();
$asdf = $result->fetch_all();


if ($result->num_rows === 1){
$_SESSION['username'] = $username;
$_SESSION['fullname'] = $asdf[0][4];

}else{
echo "Login failed";
exit;
}
}
if (isset($_SESSION['username'])){

$class = "admin";

$stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ? AND password = ? AND class = ?");
$stmt->bind_param("sss", $username, $password, $class);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

if ($result->num_rows === 1){

$_SESSION['class'] = "admin";
$class = $_SESSION['class'];

} else {

$_SESSION['class'] = "user";
$class = $_SESSION['class'];

}
}

$mysqli->close();

echo "
    <script>
    window.location = 'index.php';
    </script>
    ";

?>