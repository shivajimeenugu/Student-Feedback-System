<?php

?>

<?php
session_start();
if(!isset($_SESSION["hod_username"])){
header("Location: hod_login.php");
exit(); }
?>
