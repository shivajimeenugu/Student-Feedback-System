<?php

?>

<?php
session_start();
if(!isset($_SESSION["letc_username"])){
header("Location: letc_login.php");
exit(); }
?>
