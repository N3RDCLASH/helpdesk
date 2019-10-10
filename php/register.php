<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "helpdesk";

//database connection
$conn = new mysqli($servername, $username, $password, $dbname);
return $conn;

if(isset($_POST["action"])){
//sanitize query
$naam = htmlspecialchars(strip_tags($_POST["naam"]));
$afdeling = htmlspecialchars(strip_tags($_POST["afdeling"]));
$datum_gebruik = htmlspecialchars(strip_tags($_POST["datum_gebruik"]));
$datum_terug = htmlspecialchars(strip_tags($_POST["datum_terug"]));
$gewenste_apparaat = htmlspecialchars(strip_tags($_POST["gewenste_apparaat"]));
$bijzonderheden = htmlspecialchars(strip_tags($_POST["bijzonderheden"]));
$getest_door = htmlspecialchars(strip_tags($_POST["getest_door"]));
$datum_test = htmlspecialchars(strip_tags($_POST["datum_test"]));

//sanitize values coming soon


//have to finish query.
$query = "INSERT INTO 
reserveringen 
SET 
naam=:naam,
afdeling=:afdeling,
datum_gebruik=:datum_gebruik,
datum_terug=:datum_terug,
gewenste_apparaat=:gewenste_apparaat,
bijzonderheden=:bijzonderheden,
getest_door=:getest_door,
datum_test=:datum_test";

$stmt = mysqli_connect($conn)->mysqli_prepare($query);

if (mysqli_connect_errno())
 {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

$stmt->mysqli_stmt_bind_param(":naam",$naam);
$stmt->mysqli_stmt_bind_param(":afdeling",$afdeling);
$stmt->mysqli_stmt_bind_param(":datum_gebruik",$datum_gebruik);
$stmt->mysqli_stmt_bind_param(":datum_terug",$datum_terug);
$stmt->mysqli_stmt_bind_param(":gewenste_apparaat",$gewenste_apparaat);
$stmt->mysqli_stmt_bind_param(":bijzonderheden",$bijzonderheden);
$stmt->mysqli_stmt_bind_param(":getest_door",$getest_door);
$stmt->mysqli_stmt_bind_param(":datum_test",$datum_test);

$stmt->mysqli_stmt_execute();
  
}
?>