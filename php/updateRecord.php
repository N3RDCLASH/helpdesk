<?php
require "conn.php";

$_id= $_REQUEST["id"];

//escaping strings in query
$naam = mysqli_real_escape_string($link,$_POST["naam"]);
$afdeling = mysqli_real_escape_string($link,$_POST["afdeling"]);

//converting to date
$datum_uitgave = mysqli_real_escape_string($link,$_POST["datum_uitgave"]);
$datum_uitgave = date('Y-m-d', strtotime(str_replace('-', '/', $datum_uitgave)));

//converting to date 
$datum_terug = mysqli_real_escape_string($link, $_POST["datum_terug"]);
$datum_terug = date('Y-m-d', strtotime(str_replace('-', '/', $datum_terug)));

$gewenste_apparaat = mysqli_real_escape_string($link, $_POST["gewenste_apparaat"]);
$bijzonderheden = mysqli_real_escape_string($link, $_POST["bijzonderheden"]);
$getest_door = mysqli_real_escape_string($link, $_POST["getest_door"]);
$datum_test = mysqli_real_escape_string($link, $_POST["datum_test"]);

$query =
    "UPDATE reserveringen
SET 
naam=?,
afdeling=?,
datum_uitgave=?,
datum_terug=?,
gewenste_apparaat=?,
bijzonderheden=?,
getest_door=?,
datum_test=?

WHERE 
id = ?";

$stmt = mysqli_stmt_init($link);


if (!mysqli_stmt_prepare($stmt, $query)) {
    echo "failed preparing statement";
} else {
    mysqli_stmt_bind_param($stmt, 'ssssssssi', $naam, $afdeling, $datum_uitgave, $datum_terug, $gewenste_apparaat, $bijzonderheden, $getest_door, $datum_test,$_id);
    //execute statement
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    mysqli_close($link);
}
$msg = "Record updated succesfully!";
$return_Object = [
    "msg" => $msg,
    "id" => $_id
];

die(json_encode($return_Object));

