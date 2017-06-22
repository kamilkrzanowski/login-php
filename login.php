<?php

  if ((!isset($_POST['login'])) && (!isset($_POST['password']))) {
    header('location: index.php');
    exit();
  }

  session_start();
  require_once 'connect.php';

  $connect = @new mysqli($host, $db_user, $db_password, $db_name);

  if ($connect->connect_errno!=0) {
    echo "error: ".$connect->connect_errno;
  }
  else {
    $login = $_POST['login'];
    $pass = $_POST['password'];

    $login = htmlentities($login, ENT_QUOTES, "UTF-8");
    $pass = htmlentities($pass, ENT_QUOTES, "UTF-8");

    if ($result = @$connect->query(sprintf("SELECT * FROM uzytkownicy WHERE user='%s' AND pass='%s'", mysqli_real_escape_string($connect, $login), mysqli_real_escape_string($connect, $haslo)))) {
      $ilu_userow = $result->num_rows;
      if ($ilu_userow>0) {
        $_SESSION['zalogowany'] = true;
        $wiersz = $result->fetch_assoc();
        $_SESSION['id'] = $wiersz['id'];
        $_SESSION['user'] = $wiersz['user'];
        $_SESSION['email'] = $wiersz['email'];
        $_SESSION['drewno'] = $wiersz['drewno'];
        $_SESSION['kamien'] = $wiersz['kamien'];
        $_SESSION['zboze'] = $wiersz['zboze'];
        $_SESSION['dnipremium'] = $wiersz['dnipremium'];

        unset($_SESSION['blad']);
        $result->close();
        header('location: game.php');
      }
      else {
        $_SESSION['blad'] = "Niepoprawny login lub hasło";
        header('location: index.php');
      }
    }
    $connect->close();
  }
?>
