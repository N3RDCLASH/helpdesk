<?php


if(isset($_POST["action"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helpdesk";

//database connection
$conn = new mysqli($servername, $username, $password, $dbname);

//sanitize query
$naam = htmlspecialchars(strip_tags($_POST["naam"]));
$afdeling = htmlspecialchars(strip_tags($_POST["afdeling"]));
$datum_gebruik = htmlspecialchars(strip_tags($_POST["datum_gebruik"]));
$datum_terug = htmlspecialchars(strip_tags($_POST["datum_terug"]));
$gewenste_apparaat = htmlspecialchars(strip_tags($_POST["gewenste_apparaat"]));
$bijzonderheden = htmlspecialchars(strip_tags($_POST["bijzonderheden"]));
$getest_door = htmlspecialchars(strip_tags($_POST["getest_door"]));
$datum_test = htmlspecialchars(strip_tags($_POST["datum_test"]));


echo "de naam is .$naam.";
}
?>