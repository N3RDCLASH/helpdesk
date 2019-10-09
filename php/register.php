<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helpdesk";

//database connection
$conn = new mysqli($servername, $username, $password, $dbname);
return $conn;

//TODO stil debating if should go procedural or object oriented.
$naam = $_POST["naam"];
$afdeling = $_POST["afdeling"];
$datum_gebruik = $_POST["datum_gebruik"];
$datum_terug = $_POST["datum_terug"];
$gewenste_apparaat = $_POST["gewenste_apparaat"];
$bijzonderheden = $_POST["getest_door"];
$datum_test = $_POST["datum_test"];

//sanitize values coming soon

//have to finish query.
$query = "INSERT INTO reserveringen (naam) values (.$naam.)";
?>