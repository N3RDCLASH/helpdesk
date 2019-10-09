<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helpdesk";

$conn = new mysqli($servername, $username, $password, $dbname);
return $conn;

?>