<?php


if (isset($_POST["action"])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "helpdesk";
    $port = "3306";

    //database connection
    $link = mysqli_connect($servername, $username, $password, $dbname, $port);

    //escaping strings in query
    $naam = mysqli_real_escape_string($link, $_POST["naam"]);
    $afdeling = mysqli_real_escape_string($link, $_POST["afdeling"]);
    
    //converting to date
    $datum_uitgave = mysqli_real_escape_string($link, $_POST["datum_uitgave"]);
    $datum_uitgave = date('Y-m-d', strtotime(str_replace('-', '/', $datum_uitgave)));
    
    //converting to date 
    $datum_terug = mysqli_real_escape_string($link, $_POST["datum_terug"]);
    $datum_terug = date('Y-m-d', strtotime(str_replace('-', '/', $datum_terug)));

    $gewenste_apparaat = mysqli_real_escape_string($link, $_POST["gewenste_apparaat"]);
    $bijzonderheden = mysqli_real_escape_string($link, $_POST["bijzonderheden"]);
    $getest_door = mysqli_real_escape_string($link, $_POST["getest_door"]);
    $datum_test = mysqli_real_escape_string($link, $_POST["datum_test"]);

    
    
// query for inserting values.
    $query =
"INSERT INTO 
reserveringen 
SET 
naam=?,
afdeling=?,
datum_uitgave=?,
datum_terug=?,
gewenste_apparaat=?,
bijzonderheden=?,
getest_door=?,
datum_test=?
";


    //initialize database link
    $stmt = mysqli_stmt_init($link);
    if (!$stmt) {
        echo "link failed";
    } else {

        //prepare statement
        if (!mysqli_stmt_prepare($stmt, $query)) {
            echo " sql statement failed";
        } else {
            mysqli_stmt_bind_param($stmt, 'ssssssss', $naam, $afdeling, $datum_uitgave, $datum_terug, $gewenste_apparaat, $bijzonderheden, $getest_door, $datum_test);
            //execute statement
            mysqli_stmt_execute($stmt);

            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($link);
    header("Location:../index.html");
}
?>