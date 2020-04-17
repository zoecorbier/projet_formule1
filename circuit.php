<?php require('header.php');?>

        
            <h1>Données sur les circuits</h1>
            <a href="indexstat.php" > <<- Page précédente</a>       
        <br>  <br>  <br> 
        <table> 
             <tr>
			     <th>Nom</th>
			     <th>Ville</th>
			     <th>Pays du Circuit</th>
		      </tr>
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Circuit');
                
                $ligne = $rep->fetch();
                while ($ligne = $rep ->fetch()) { 
		          echo "<tr>";
		          echo "<td>".$ligne["NomCircuit"]."</td>";
		          echo "<td>".$ligne["VilleCircuit"]."</td>";
		          echo "<td>".$ligne["PaysCircuit"]."</td>";
		          echo "</tr>";
		          }
                $rep ->closeCursor();
                ?>
            
        </table>
    </body>
    
</html>