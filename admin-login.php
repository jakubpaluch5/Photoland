<?php
session_start();
if (isset($_SESSION['zalogowany']))
{
    echo '<script>';
    echo 'alert("Zostałeś wylogowany");';
    echo 'window.location = "admin-login.php";';
    echo '</script>';
    session_destroy();
   $_SESSION['zalogowany'] = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHOTO-LAND | Panel administracyjny</title>
    <link rel="stylesheet" href="admin-login.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
    <div id="container">
    <a href="index.php">
    <div id="back">
            
                <span id="arrow" class="material-icons">
                    keyboard_backspace
                </span>
            
        </div>
        </a>
        <img id="logo" src="row_white_photoland300px.png" alt="Photo-Land" id="logo">
        <div id="center">
            <div id="center-form">
            <h1>PANEL ADMINISTRACYJNY</h1>
            <form action="admin-login.php" method="POST">  
            
            <input type="text" name="login" id="email" placeholder="Login">
            <input type="password" name="password" id="title" placeholder="Hasło">
            <input type="submit" name="dodaj" id="dodaj" value="Zaloguj" class="btn">
            </form>
            <?php 
      
    
     
      if (isset($_POST['login'] ) and isset($_POST['password']))
      {
           $login = $_POST['login'];
           $haslo = $_POST['password'];
           
           if($login == "photo-land-admin" && $haslo == "ckziu@JpMm01")
           {
               $_SESSION['login'] = $login;
               $_SESSION['zalogowany'] = true;
               header('Location: secret-admin.php');
           }
           else
           {
               echo '<span class="text-danger">Nieprawidłowy login lub hasło.</span>';
               
           }
       }
  ?>
            </div>
        </div>
    </div>
</body>
</html>