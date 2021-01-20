<?php

session_start();

if (!isset($_SESSION['zalogowany']))
{
    
    
    
   
    echo '<script>';
    echo 'alert("Zaloguj sie!");';
    echo 'window.location = "admin-login.php";';

    echo '</script>';
    session_destroy();
    
   $_SESSION['zalogowany'] = null;
}


?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="secret-admin.css">
	<title>Profil użytkownika</title>
</head>

<body>
    <div id="container">
    
        <h1>Panel administratora</h1>
        <a href="logout.php"><button id="logout">Wyloguj</button></a>
        <div id="photo-container">
       
                <?php 
                    include_once("connect.php");
                    $query = $conn -> query("SELECT * FROM `photos` WHERE `checked` = '0' ORDER BY `add_date` DESC");
                    
                    while($row = mysqli_fetch_assoc($query)){
                        
                ?>
               
                <div id="photo">
               
               
                    <img src="img/<?php echo $row["photo"];?>" alt="<?php echo $row["title"];?>">
                    <a style="text-decoration: none; color:black;" href="photo.php?id=<?php echo $row["id_photo"];?>">
                      
                            <?php 
                            $id = $row["id_photo"];
                            ?>
                            
                            <i style="text-decoration: none;"  class="fas fa-comment-dots"></i>
                      
                    </a>
                    <div id="title">
                        
                        <span><?php echo $row["title"];?></span>
                        
                    </div>
                   
                  

                </div>
                <?php } ?>
                </div>
                <form method="post" action="secret-admin.php">
                    <input type="submit" name="dodaj" value="Dodaj">
                </form>
                <?php 
                    include_once("connect.php");
                    if (isset($_POST['dodaj']))
                    {
                    $query = $conn -> query("UPDATE `photos` SET `checked` = '1' WHERE `photos`.`id_photo` = $id");
                   
                    }
                    
                ?> 
    </div>
</body>

</html>