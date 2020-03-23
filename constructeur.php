<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Style/table.css" type="text/css" media="screen" />
        <title>Pilote</title>
        
    </head>
    
    <nav class="projet">
            <div class="projet">
            <ul>
                <li><a href="pageacceuil.html" style="text-decoration:none">Accueil</a></li>
                <li><a href="course.php" style="text-decoration:none">Données sur les courses</a></li>
            </ul>
            </div>
    </nav>
    
    <body>
        <table>
            
            <h1>Données sur les constructeurs</h1>
             <tr>
			     <th>Nom</th>
			     <th>Nationalité</th>
		      </tr>
            
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet_Formule1;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Constructeur');
                
                $ligne = $rep->fetch();
                while ($ligne = $rep ->fetch()) { 
		          echo "<tr>";
		          
		          echo "<th>".$ligne["NomConstructeur"]."</th>";
		          echo "<th>".$ligne["NationalitéConstructeur"]."</th>";
		          echo "</tr>";
		          }
                $rep ->closeCursor();
                ?>
            
            
        </table>
    </body>
    
</html>