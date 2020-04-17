<?php require('header.php');?>
        
        <h1>Données sur les pilotes</h1>
        <a href="indexstat.php" > <<- Page précédente</a>       
        <br>  <br>  <br> 
        <table>
             <tr>
			     <th>Prénom</th>
			     <th>Nom</th>
			     <th>Date de naissance</th>
			     <th>Nationalité</th>
		      </tr>
            
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Pilote');
                
                $ligne = $rep->fetch();
            
                while ($ligne = $rep ->fetch() ) { 
                  print '<div id="ligne_'.$ligne["PrenomPilote"].'">';

		          echo "<tr >";
		          echo "<td>".$ligne["PrenomPilote"]."</td>";
		          echo "<td>".$ligne["NomPilote"]."</td>";
		          echo "<td>".$ligne["NaissancePilote"]."</td>";
		          echo "<td>".$ligne["NationalitéPilote"]."</td>";
                  echo "</tr>";

                  print '</div>';
		          }
                $rep ->closeCursor();
                ?>
            
        </table>
          
    </body>
    
</html>