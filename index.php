<?php require('header.php');?>

        </div>
        <BR> <BR> 

        <p id="presentation">Bienvenue sur notre site, ici vous aurez librement accès à des renseignements sur la formule 1 et en créant un compte vous aurez la possibilité de participer à un quizz sur ce même thème</p>
        <BR>
        <p id="exemple">Exemple de données sur les pilotes :</p>
<BR>
        <table>
             <tr>
			     <th>Prénom</th>
			     <th>Nom</th>
			     <th>Date de naissance</th>
			     <th>Nationalité</th>
		      </tr>
            
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Pilote LIMIT 10');
                
                $ligne = $rep->fetch();
            
                while ($ligne = $rep ->fetch() ) { 
		          echo "<tr>";
		          echo "<td>".$ligne["PrenomPilote"]."</td>";
		          echo "<td>".$ligne["NomPilote"]."</td>";
		          echo "<td>".$ligne["NaissancePilote"]."</td>";
		          echo "<td>".$ligne["NationalitéPilote"]."</td>";
                  echo "</tr>";
		          }
                $rep ->closeCursor();
                ?>
            
        </table>
        <BR>
        <a class="bt" href="indexstat.php"> Plus de données </a>

 	</body>
 </html>