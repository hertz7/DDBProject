<?php
session_start();

include("config.php");

$msg=$_SESSION["rollno"];

echo"Welcome Student $msg";






?>
