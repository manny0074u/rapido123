<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'bank';
$db = &new MySQL($host,$user,$pass,$db);




ini_set('display_errors', '0'); 		# don't show any errors...
error_reporting(E_ALL | E_STRICT); 		# ...but do log them
?>

