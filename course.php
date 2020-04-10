<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="page.css" type="text/css" media="screen" />media="screen" />
	    <title>Course</title>
        
    </head>
 
    
    <body>
        <div class="projet">
            <img class="imgpres" height='100' width='100'src="image.png">
            <p id="titre">Formule 1</p>
            
            <ul>
                <li id="co"><a href="../projet/connexion1.php">Se connecter</a></li>
                <li><a href="../projet/new.php">Créer un compte</a></li>
                <li><a href="index.php">Accueil</a></li>
            </ul>
        </div>
        
        <h1>Données sur les courses</h1>
        <table>
             <tr>
			     <th>Nom</th>
			     <th>Date</th>
			     <th>Année</th>
			     <th>Durée de la course</th>
		      </tr>
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Course');
                
                $ligne = $rep->fetch();
                while ($ligne = $rep ->fetch()) { 
		          echo "<tr>";
		          echo "<th>".$ligne["NomCourse"]."</th>";
		          echo "<th>".$ligne["DateCourse"]."</th>";
		          echo "<th>".$ligne["AnneeCourse"]."</th>";
		          echo "<th>".$ligne["TempsCourse"]."</th>";
		          echo "</tr>";
		          }
                $rep ->closeCursor();
                ?>
            
            
        </table>
    </body>
    
</html>
