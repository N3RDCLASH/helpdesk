<?php
require "conn.php";
    $query =
    "SELECT * 
    FROM reserveringen";

    $stmt= mysqli_stmt_init($link);

    if (!mysqli_stmt_prepare($stmt,$query)){
        echo "statement preparation failed";
    } else{
        mysqli_stmt_execute($stmt);
         /* bind result variables */
    mysqli_stmt_bind_result($stmt,$id,$naam, $afdeling, $datum_uitgave, $datum_terug, $gewenste_apparaat, $bijzonderheden, $getest_door, $datum_test);
    /* fetch value */
    }

