<?php
session_start();
$_SESSION['loggedIn'] = false;
header("location: ../Index.php");
?>