<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../projet/style1.css" type="text/css" media="screen" />
		<title> Quizz </title>
	</head>
	<body>
		<h1> Quizz </h1> </br>
	<a href="index.php"> Quitter le quizz </a>

	<br>
				<center>
					<br>
<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8',
	'root', 'root');

$quizz=$bdd->query("SELECT *FROM Quizz ORDER BY RAND() LIMIT 3");



$i=1;
while ($ligne = $quizz->fetch()){
	
	echo "Question ".$i." : ".$ligne['Question']."<br>";

	
	$reponses=array();
	$reponses[]='<input type="radio" name="question'.$i.'" value="bonne reponse" "> 
	<label id="id_bonne_reponse'.$i.'">'.$ligne["BonneReponse"].'</label><br>';

	$reponses[]='<input type="radio" name="question'.$i.'" value="mauvaise reponse 1"><label>'.$ligne["MauvaiseReponse1"].'</label><br>';
	$reponses[]='<input type="radio" name="question'.$i.'" value="mauvaise reponse 2"><label>'.$ligne["MauvaiseReponse2"].'</label><br>';
	
	shuffle($reponses);

	
	echo $reponses[1];
	echo $reponses[2];

	echo "<br>";
	$i+=1;
}

?> 
			<br><br>
			<button onclick="reponse()"> Voir les reponses</button>
			<a href="quizz2.php"><button>Generer un autre quizz</button></a>
	</center>
<script type="text/javascript">
function reponse(){
	document.getElementById('id_bonne_reponse1').style.color="green";
	document.getElementById('id_bonne_reponse2').style.color="green";
	document.getElementById('id_bonne_reponse3').style.color="green";
}
</script>



	</body>
</html> 