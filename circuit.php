<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Style/table.css" type="text/css" media="screen" />
        <title>Circuit</title>
        
    </head>
    
    
    
    <body>
	 <div class="projet">
            
            <ul>
                <li><a href="pageacceuil.html" style="text-decoration:none">Accueil</a></li>
                <li><a href="constructeur.php" style="text-decoration:none">Données sur les constructeurs</a></li>
            </ul>
            
        </div>
        <table>
            <h1>Données sur les circuits</h1>
             <tr>
			     <th>Nom</th>
			     <th>Ville</th>
			     <th>Pays du Circuit</th>
		      </tr>
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet_Formule1;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Circuit');
                
                $ligne = $rep->fetch();
                while ($ligne = $rep ->fetch()) { 
		          echo "<tr>";
		          //echo"<th>"<a href="article/".$ligne[nom].".html{" > .$ligne["nom"]. </a>"</th>"
		          echo "<th>".$ligne["NomCircuit"]."</th>";
		          echo "<th>".$ligne["VilleCircuit"]."</th>";
		          echo "<th>".$ligne["PaysCircuit"]."</th>";
		          echo "</tr>";
		          }
                $rep ->closeCursor();
                ?>
            
        </table>
    </body>
    
</html>
