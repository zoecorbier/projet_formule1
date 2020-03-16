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
            <tr>
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet_Formule1;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Constructeur');
                
                $ligne = $rep->fetch();
                while ($ligne = $rep ->fetch()) { 
		          echo "<tr>";
		          //echo"<th>"<a href="article/".$ligne[nom].".html{" > .$ligne["nom"]. </a>"</th>"
		          echo "<th>".$ligne["NomConstructeur"]."</th>";
		          echo "<th>".$ligne["NationalitéConstructeur"]."</th>";
		          echo "</th>";
		          }
                $rep ->closeCursor();
                ?>
            </tr>
            
        </table>
    </body>
    
</html>