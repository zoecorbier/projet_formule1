<?php
session_start();


$mail=$_POST['mail'];
$mdp=$_POST['mdp'];


$bdd = new 
PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root','root');

$informations = $bdd-> query ("select * from Utilisateur 
	where MailUtilisateur='$mail' and mdp='$mdp' ");


$informations=$informations->fetch();



if(!$informations){
	 echo "<meta http-equiv='refresh' content='2; URL=connexion1.php'>";
}

else{

	$_SESSION['utilisateur']=array('MailUtilisateur'=>$informations['MailUtilisateur'],
		'NomUtilisateur'=>$informations['NomUtilisateur'],
		'PrenomUtilisateur'=>$informations['PrenomUtilisateur'],
		'AdresseUtilisateur'=>$informations['AdresseUtilisateur'],
		'CodePostalUtilisateur'=>$informations['CodePostalUtilisateur'],
		'PaysUtilisateur'=>$informations['PaysUtilisateur'],
		'DateNaissanceUtilisateur'=>$informations['DateNaissanceUtilisateur'],
		'TelephoneUtilisateur'=>$informations['TelephoneUtilisateur'],
		'mdp'=>$informations['mdp']);


	echo "<meta http-equiv='refresh' content='2; URL=index.php'>";

}

?>