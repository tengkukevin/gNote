<?php 
define('HOSTNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'gnote');

$db = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE) or die(mysqli_errno());