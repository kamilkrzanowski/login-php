<?php
  session_start();

  if (!isset($_SESSION['zalogowany'])) {
    header('location: index.php');
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
  </head>
  <body class="brown lighten-5">
  <div class="container">
    <h2 class="center-align orange-text">Gra przeglądarkowa osadnicy</h2>
      <div class="row">

            <div class="col s4">
              <div class="card brown lighten-1">
                <div class="card-content white-text">
                  <span class="card-title">
                    Witaj <?php echo $_SESSION['user'];?>
                  </span>
                  <img src="https://pbs.twimg.com/profile_images/437964328726433792/v6_Gu8yN.jpeg" alt="pieseł" class="responsive-img circle" style="height: 50px;">
                </li>
                  <p><?php echo '<strong>E-mail: </strong>'.$_SESSION['email']; ?>
                  </p>
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                  <a href="logout.php" class="btn-flat waves-orange waves-effect white-text">Wyloguj</a>
                </div>
              </div>
            </div>
                  <div class="col s8">
                    <div class="card brown lighten-1">
                      <div class="card-content white-text">
                        <span class="card-title">Twoje zasoby</span>

                        <div class="row">
                          <div class="col s4">
                            <div class="card-panel orange center-align">
                              <b>Drewno: </b><?php echo $_SESSION['drewno']; ?>
                            </div>
                          </div>

                          <div class="col s4">
                            <div class="card-panel orange center-align">
                              <b>Kamień: </b><?php echo $_SESSION['kamien']; ?>
                            </div>
                          </div>

                          <div class="col s4">
                            <div class="card-panel orange center-align">
                              <b>Zboże: </b><?php echo $_SESSION['zboze']; ?>
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="card-action">
                        <p><a>Dni premium: <?php echo $_SESSION['dnipremium']; ?></a>
                        <a href="#">Przedłuż</a></p>
                      </div>
                    </div>
                  </div>
    </div><!-- ./ row div -->

  </div>




  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>

  </body>
</html>
