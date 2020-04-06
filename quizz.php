
<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="../projet/page.css" type="text/css" media="screen" />
		<title> Quizz </title>
	</head>
	<body>


<?php//
//echo rand() . "\n";
//echo rand() . "\n";//

//echo rand(0,  mt_getrandmax());//
?>

			
			
				<div id="cadre-connexion">
				<center>
				<p class="quizz"> <br> Quizz </p></br>
				</center>
				</div>
	

	<form method="get" action="//la page où on enregistre les données//" autocomplete="off"/>
	 <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet_Formule1;charset=utf8', 'root', 'root');
				

				<p id="id1">  
					<center>
					<br>	
					Question 1:
					<INPUT type="text" name="q1" value='Qui a gagné avec <?php echo rand(idConstructeur)?> la course     <?php echo rand(idCourse)?>'/>
					<br>
					Question 2:
					<INPUT type="text" name="q2" value='Qui a gagné la course <?php echo rand(idCourse)?> avec le circuit     <?php echo rand(idCircuit)?>'/>
					<br>
					Question 3:
					<INPUT type="text" name="q3" value='Qui a gagné sur le circuit <?php echo rand(idCircuit)?> avec le constructeur    <?php echo rand(idConstructeur)?>'/>
					<br>
					Question 4:
					<INPUT type="text" name="q4" value='Quelle course a était gagné par  <?php echo rand(idPilote)?> sur le circuit    <?php echo rand(idCircuit)?>'/>
					<br>
					Question 5:
					<INPUT type="text" name="q5" value='Quelle course a était gagné par  <?php echo rand(idConstructeur)?> sur le circuit     <?php echo rand(idCircuit)?>'/>
					<br>
					Question 6:
					<INPUT type="text" name="q6" value='Quelle course a était gagné par  <?php echo rand(idPilote)?> avec le constructeur    <?php echo rand(idConstructeur)?>'/>
					<br>
					Question 7:
					<INPUT type="text" name="q7" value='Sur quel circuit a été emporté la course <?php echo rand(idCourse)?> par     <?php echo rand(idPilote)?>'/>
					<br>
					Question 8:
					<INPUT type="text" name="q8" value='Sur quel circuit le constructeur <?php echo rand(idConstructeur)?>  à remporté     la     <?php echo rand(idCourse)?>'/>
					<br>
					Question 9:
					<INPUT type="text" name="q9" value=' Quel constructeur a gagné la course <?php echo rand(idCourse)?> sur le circuit     <?php echo rand(idCircuit)?>'/>
					<br>
					Question 10:
					<INPUT type="text" name="q10" value='Quel constructeur a gagné la course <?php echo rand(idCourse)?> sur le pilote    <?php echo rand(idPilote)?>'/>
				</p>
				 ?>
				
			</form>
		




	</body>
</html> 
