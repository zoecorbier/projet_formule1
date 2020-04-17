<?php require('header.php');?>
      
            
            <h1>Données sur les constructeurs</h1>
             <a href="indexstat.php" > <<- Page précédente</a>       
        <br>  <br>  <br> 
             
  <table>
             <tr>
			     <th>Nom</th>
			     <th>Nationalité</th>
		      </tr>
            
                <?php
                 $bdd = new PDO('mysql:host=localhost;dbname=Projet;charset=utf8', 'root', 'root');
                $rep = $bdd->query('select * from Constructeur');
                
                $ligne = $rep->fetch();
                while ($ligne = $rep ->fetch()) { 
		          echo "<tr>";
		          
		          echo "<td>".$ligne["NomConstructeur"]."</td>";
		          echo "<td>".$ligne["NationalitéConstructeur"]."</td>";
		          echo "</tr>";
		          }
                $rep ->closeCursor();
                ?>
            
            
        </table>
    </body>
    
</html>