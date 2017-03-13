<?php
 //Currency Character or code

$db_username = 'root';
$db_password = '';
$db_name = 'railway concession';
$db_host = 'localhost';						
//connect to MySql						
$db_var = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($db_var->connect_error) {
    die('Error : ('. $db_var->connect_errno .') '. $db_var->connect_error);
}
?>
