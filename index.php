<?php
session_start();

if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']===true)) {
  header('location: game.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP SANDBOX</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
    <style>
    .input-field input:focus + label {
       color: #90a4ae !important;
     }
     /* label underline focus color */
     .row .input-field input:focus {
       border-bottom: 1px solid #90a4ae !important;
       box-shadow: 0 1px 0 0 #90a4ae !important
     }
    </style>
  </head>
  <body class="brown lighten-1">
  <div class="container">
    <h2 class="center-align white-text">Logowanie osadnicy</h2>
    <div class="card-panel brown lighten-5">
      <div class="row">
        <div class="col s6 offset-s3">
          <?php if(isset($_SESSION['blad']))
          echo '<div class="red-text center-align">'.$_SESSION['blad'].'</div>'; ?>
          <form action="login.php" method="POST">
          <!-- POLE IMIĘ -->
          <div class="input-field">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" id="login" name="login">
            <label for="login" class="active">Login</label>
          </div>
          <!-- POLE HASŁO -->
          <div class="input-field">
            <i class="material-icons prefix">lock</i>
            <input type="password" id="password" name="password">
            <label for="password" class="active">Hasło</label>
          </div>
        <input class="btn btn-large waves-effect green right" type="submit" value="Zaloguj">
        </form>
        </div>
    </div>
</div>
  </div>




  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>

  </body>
</html>
