<?php
require "php/getRecords.php";

?>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Reserveringen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Materialize CSS -->
  <!-- Compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" /> -->
  <link rel="stylesheet" href="css/materialize.min.css" />
  <link rel="stylesheet" href="css/materialize.css" />
  <!-- Custom -->
  <link rel="stylesheet" type="text/css" media="screen" href="css/client.css" />

</head>

<body class="blue-grey">
  <nav id="nav">
    <div class="nav-wrapper">
      <a class="brand-logo" href="http://">Reserveringen</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      </ul>
    </div>
  </nav>

  <div class="row" id="main_row">
    <div id="main" class="col s9 push-s3 blue-grey darken-3 ">


      <nav id="search">
        <div class="nav-wrapper">
          <form>
            <div class="input-field">
              <input id="search" type="search" required />
              <label class="label-icon" for="search">
                <i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </div>
      </nav>

      <table class="highlight white-text">
        <thead>
          <tr>
            <th>Naam</th>
            <th>Afdeling</th>
            <th>Datum van Afgifte</th>
            <th>Datum Terug </th>
            <th>Gewenste Apparaat</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody id="recordtbody">
          <?php
          while (mysqli_stmt_fetch($stmt)) {
            echo
              "<tr id='$id'>
            <td>" . $naam . "</td>
            <td>" . $afdeling . "</td>
            <td>" . $datum_uitgave . "</td>
            <td>" . $datum_terug . "</td>
            <td>" . $gewenste_apparaat . "</td>
            <td><i class='material-icons'><a  id='edit' class='white-text edit' onclick='showModal(" . $id . ")'>create</a></td>
            
            </tr>";
          }

          mysqli_stmt_close($stmt);
          mysqli_close($link);

          ?>
        </tbody>
      </table>
    </div>
    <div class="col s3 pull-s9 blue-grey darken-4" id="sidebar">

    </div>
  </div>
<form autocomplete="false" id="form" >
  <div id="modal1" class="modal blue-grey darken-3">
    <div class="row">
      <h3 class="white-text">Reserveringen</h3>
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Naam" name="naam" id="naam" type="text" class="validate white-text">
          <label for="">Naam</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Afdeling" id="afdeling" name="afdeling" type="text" class="validate white-text">
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
          <input id="datum_terug" name="datum_terug" type="text" class="validate white-text datepicker">
          <label for="datum_terug">Datum terug</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="gewenste_apparaat" type="text" name="gewenste_apparaat" class="validate white-text">
          <label for="gewenste_apparaat">Gewenste Apparaat</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="text" name="bijzonderheden" id="bijzonderheden" class="validate white-text">
          <label for="bijzonderheden">Bijzonderheden</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="text" name="getest_door" id="getest_door" class="validate white-text">
          <label for="getest_door">Getest Door</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input type="text" name="datum_test" id="datum_test" class="datepicker validate white-text">
          <label for="datum_test">Datum Test</label></div>
      </div>
    </div>
    <?php
    echo '
    <div class="modal-footer blue-grey darken-3">
      <button class="btn waves-effect waves-light modal-close" type="button" value="submit"  onclick="updateRecord('.$id.')" name="action">Submit
        <i class="material-icons right">send</i>
      </button>
      <a href="#!" onclick="" class="modal-close white-text waves-effect waves- btn-flat" onclick="">Cancel</a>
    </div>';
    ?>
  </div>
</form>

</body>
<!-- Javascript dependencies -->
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

<!-- <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script> -->
<script type="text/javascript" src="js/editRecord.js"></script>
<script type="text/javascript" src="js/datepicker.js"></script>
<Script type="text/javascript" src="js/modal.js"></Script>

</html>