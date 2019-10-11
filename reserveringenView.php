<?php
include "php/getReserveringen.php";

?>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Reserveringen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
  <!-- Materialize CSS -->

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <link rel="stylesheet" href="../lib/materialize/css/materialize.min.css" />

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

      <table class="responsive-table highlight white-text">
        <thead>
          <tr>
            <th>Naam</th>
            <th>Afdeling</th>
            <th>Datum van Afgifte</th>
            <th>Datum Terug </th>
            <th>Gewenste Apparaat</th>
          </tr>
        </thead>
        <tbody>
           <?php 
           while(mysqli_stmt_fetch($stmt)){
            echo
            "<tr>
            <td>".$naam."</td>
            <td>".$afdeling."</td>
            <td>".$datum_uitgave."</td>
            <td>".$datum_terug."</td>
            <td>".$gewenste_apparaat."</td>
            </tr>";
        }
    
        mysqli_stmt_close($stmt);
        mysqli_close($link);
           
           ?>
        </tbody>
      </table>
    </div>
    <div class="col s3 pull-s9 blue-grey darken-4" id="sidebar"></div>
  </div>
</body>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>

</html>