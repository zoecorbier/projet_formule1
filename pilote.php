<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../projet/page.css" type="text/css" media="screen" />
        <title>Pilote</title>
        
    </head>
    
    <body>
        <table>
             <tr>
			     <th>Prénom</th>
			     <th>Nom</th>
			     <th>Date de naissance</th>
			     <th>Nationalité</th>
		      </tr>
            <tr>
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet_Formule1;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Pilote');
                
                $ligne = $rep->fetch();
                while ($ligne = $rep ->fetch()) { 
		          echo "<tr>";
		          //echo"<th>"<a href="article/".$ligne[nom].".html{" > .$ligne["nom"]. </a>"</th>"
		          echo "<th>".$ligne["PrenomPilote"]."</th>";
		          echo "<th>".$ligne["NomPilote"]."</th>";
		          echo "<th>".$ligne["NaissancePilote"]."</th>";
		          echo "<th>".$ligne["NationalitéPilote"]."</th>";
		          echo "</th>";
		          }
                $rep ->closeCursor();
                ?>
            </tr>
            
        </table>
    </body>
    
</html>