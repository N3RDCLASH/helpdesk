<?php
require "conn.php";
$_id = $_GET['id'];

$query =
    "SELECT *
    FROM reserveringen
    WHERE id = $_id";

$stmt= mysqli_stmt_init($link);

    if (!mysqli_stmt_prepare($stmt,$query)){
        echo "statement preparation failed";
    } else{
        mysqli_stmt_execute($stmt);
         /* bind result variables */
    mysqli_stmt_bind_result($stmt,$id,$naam, $afdeling, $datum_uitgave, $datum_terug, $gewenste_apparaat, $bijzonderheden, $getest_door, $datum_test);
    /* fetch value */
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);
    }

$returnObject = [
    "id" => $id,
    "naam" => $naam,
    "afdeling" => $afdeling,
    "datum_uitgave" => $datum_uitgave,
    "datum_terug" => $datum_terug,
    "gewenste_apparaat" => $gewenste_apparaat,
    "bijzonderheden" => $bijzonderheden,
    "getest_door" => $getest_door,
    "datum_test" => $datum_test
];

die(json_encode($returnObject)); 

