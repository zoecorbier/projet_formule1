<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="table.css" type="text/css" media="screen" />
        <title>Pilote</title>
        
    </head>
    
    <nav class="projet">
            <div class="projet">
            <ul>
                <li><a href="pageacceuil.html" style="text-decoration:none">Accueil</a></li>
                <li><a href="pilote.php" style="text-decoration:none">Données sur les pilotes</a></li>
            </ul>
            </div>
    </nav>
    
    <body>
        <h1>Données sur les courses</h1>
        <table>
             <tr>
			     <th>Nom</th>
			     <th>Date</th>
			     <th>Année</th>
			     <th>Temps de la course</th>
		      </tr>
            <tr>
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet_Formule1;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Course');
                
                $ligne = $rep->fetch();
                while ($ligne = $rep ->fetch()) { 
		          echo "<tr>";
		          echo "<th>".$ligne["NomCourse"]."</th>";
		          echo "<th>".$ligne["DateCourse"]."</th>";
		          echo "<th>".$ligne["AnneeCourse"]."</th>";
		          echo "<th>".$ligne["TempsCourse"]."</th>";
		          echo "</th>";
		          }
                $rep ->closeCursor();
                ?>
            </tr>
            
        </table>
    </body>
    
</html>