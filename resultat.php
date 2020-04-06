<?php
session_start();


$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];


$bdd = new 
PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root','root');

$informations = $bdd-> query ("select * from Utilisateur 
	where q1='$q1' and q2='$q2' and q3='$q3' and q4='$q4' and q5='$q5' and q6='$q6' and q7='$q7' and q8='$q8' v and q9='$q9' and q10='$q10' ");


$informations=$informations->fetch();



if(!$informations){
	 echo "<meta http-equiv='refresh' content='2; URL=quizz.php'>";
}

else{

	$_SESSION['utilisateur']=array('QuestionUtilisateur'=>$informations['QuestionUtilisateur'];
		'Question1Utilisateur'=>$informations['Question1Utilisateur'];
		'Question2Utilisateur'=>$informations['Question2Utilisateur'];
		'Question3Utilisateur'=>$informations['Question3Utilisateur'];
		'Question4Utilisateur'=>$informations['Question4Utilisateur'];
		'Question5Utilisateur'=>$informations['Question5Utilisateur'];
		'Question6Utilisateur'=>$informations['Question6Utilisateur'];
		'Question7Utilisateur'=>$informations['Question7Utilisateur'];
		'Question8Utilisateur'=>$informations['Question8Utilisateur']);
		'Question9Utilisateur'=>$informations['Question9Utilisateur']);
		'Question10Utilisateur'=>$informations['Question10Utilisateur']);


	echo "<meta http-equiv='refresh' content='2; URL=acceuil.php'>";

}

?>