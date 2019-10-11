<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reserveringen</title>
    <link rel="stylesheet" href="css/main.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</head>

<body class="">

    <div class="row">
        <form action="php/reservering.php" method="POST" class="col s6 offset-s3 blue-grey darken-2" id="form">
            <h3>Reserveringen</h3>
            <div class="row">
                <div class="input-field col s6">
                    <input placeholder="Naam" name="naam" id="naam" type="text" class="validate white-text">
                    <label for="">Naam</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Afdeling" id="Afdeling"  name ="afdeling" type="text" class="validate white-text">
                    <label for="Afdeling">Afdeling</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="datum_uitgave" name="datum_uitgave" type="text" class="validate white-text datepicker ">
                    <label for="datum_uitgave">Datum Uitgave</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="datum_terug" name ="datum_terug" type="text" class="validate white-text datepicker">
                    <label for="datum_terug">Datum terug</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="" type="text" name="gewenste_apparaat" class="validate white-text">
                    <label for="gewenste_apparaat">Gewenste Apparaat</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="bijzonderheden" id="" class="validate white-text">
                    <label for="">Bijzonderheden</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="getest_door" id="" class="validate white-text">
                    <label for="">Getest Door</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" name="datum_test" id="datum_test" class="datepicker validate white-text">
                    <label for="datum_test">Datum Test</label></div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" value="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>

    <script src="js/datepicker.js"></script>
</body>

</html>