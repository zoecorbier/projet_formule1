<html>
<title>Formulaire</title> 

<head>

<?php

 function enregistrer($MailUtilisateur,$NomUtilisateur, $PrenomUtilisateur, $AdresseUtilisateur, $CodePostalUtilisateur, $VilleUtilisateur, $PaysUtilisateur, $DateNaissanceUtilisateur, $TelephoneUtilisateur, $mdp){

    $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root','root');

    if($bdd->query("SELECT * FROM Utilisateur WHERE
        MailUtilisateur='$MailUtilisateur'")->fetch()){

        $err='mail';

        echo "<meta http-equiv='refresh' content='2; 
    URL=new.php?mail=$MailUtilisateur&n=$NomUtilisateur&
    p=$PrenomUtilisateur&adr=$AdresseUtilisateur
    &cp=$CodePostalUtilisateur&ville=
    $VilleUtilisateur&anniversaire=$DateNaissanceUtilisateur
    &pays=$PaysUtilisateur&num=$TelephoneUtilisateur&erreur=$err'>";

    }

    else{
   
    $req="INSERT INTO `Utilisateur` (`MailUtilisateur`, `NomUtilisateur`, `PrenomUtilisateur`, `AdresseUtilisateur`, `CodePostalUtilisateur`, `VilleUtilisateur`, `PaysUtilisateur`, `DateNaissanceUtilisateur`, `TelephoneUtilicasateur`, `mdp`) 
    VALUES ('".$MailUtilisateur."', '".$NomUtilisateur."', '".$PrenomUtilisateur."', '".$AdresseUtilisateur."',".$CodePostalUtilisateur.",'".$VilleUtilisateur."','".$PaysUtilisateur."','".$DateNaissanceUtilisateur."',".$TelephoneUtilisateur.",'".$mdp."')";

    $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root','root');
    $bdd-> query ($req);

    echo "<meta http-equiv='refresh' content='2; URL=accueil.php'>";
    
    $req ->closeCursor();
    }
}

    $MailUtilisateur=$_GET['mail'];
    $NomUtilisateur=$_GET['n'];
    $PrenomUtilisateur=$_GET['p'];
    $AdresseUtilisateur=$_GET['adr'];
    $CodePostalUtilisateur=$_GET['cp'];
    $VilleUtilisateur=$_GET['ville'];
    $DateNaissanceUtilisateur=$_GET['anniversaire'];
    $PaysUtilisateur=$_GET['pays'];
    $TelephoneUtilisateur=$_GET['num'];
    $mdp=$_GET['mdp1'];



    

 if($_GET['mail']!="" && $_GET['n']!="" && $_GET['p']!="" && $_GET['adr']!="" && $_GET['cp']!="" && $_GET['ville']!="" && $_GET['anniversaire']!=""&& 
    $_GET['pays']!="" && $_GET['num']!=""&& $_GET['mdp1']!="" && $_GET['mdp2']!="" && $_GET['mdp2']==$_GET['mdp1']) 
  {   
    

     enregistrer($MailUtilisateur,$NomUtilisateur, $PrenomUtilisateur, $AdresseUtilisateur, $CodePostalUtilisateur, $VilleUtilisateur, $PaysUtilisateur, $DateNaissanceUtilisateur, $TelephoneUtilisateur, $mdp);
    }

else{

    // erreur vaut $err='mdp'

    $err='mdp';

    echo "<meta http-equiv='refresh' content='2; 
    URL=new.php?mail=$MailUtilisateur&
    n=$NomUtilisateur&p=$PrenomUtilisateur
    &adr=$AdresseUtilisateur&cp=$CodePostalUtilisateur
    &ville=$VilleUtilisateur&anniversaire=
    $DateNaissanceUtilisateur&pays=$PaysUtilisateur
    &num=$TelephoneUtilisateur&erreur=$err'>";
}


?>

</head>

</html>    
