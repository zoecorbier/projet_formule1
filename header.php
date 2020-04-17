<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style1.css" type="text/css" media="screen" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <div class="projet">
            <img height='100' width='100' class="imgpres" src="image.png">
            <p id="titre">Formule 1</p>
         <?php if(!isset($_SESSION['utilisateur'])){ ?>   
            <ul>
                <li id="co"><a href="../projet/connexion1.php">Se connecter</a></li>
                <li><a href="../projet/new.php">Créer un compte</a></li>
            </ul>

            <?php } else { 

    echo '<ul>
            <li id="co"><a href="#">Bonjour '.$_SESSION["utilisateur"]["PrenomUtilisateur"]." ".$_SESSION['utilisateur']['NomUtilisateur'].'</a></li>
            
            <li><a href="deconnexion1.php"> Se déconnecter </a></li>
            <li><a href="quizz.php"> Participer au quizz </a></li>
        </ul>
    ';
  }
  echo "</div><br><br><br><br><br><br>";
    ?>