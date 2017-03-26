<?php
$host = 'sl-us-dal-9-portal.6.dblayer.com';
$user = 'admin';
$pass = 'ENCUKVLTXDYOCZMX';
$db = 'bank';
$port = '21814';
$db = &new MySQL($host,$user,$pass,$db, $port);




ini_set('display_errors', '0'); 		# don't show any errors...
error_reporting(E_ALL | E_STRICT); 		# ...but do log them
?>

