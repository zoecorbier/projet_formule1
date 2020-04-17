<?php require('header.php');?>
           
        <h1>Données sur les courses</h1>
        <a href="indexstat.php" > <<- Page précédente</a>       
        <br>  <br>  <br> 
        
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
		          echo "<td>".$ligne["NomCourse"]."</td>";
		          echo "<td>".$ligne["DateCourse"]."</td>";
		          echo "<td>".$ligne["AnneeCourse"]."</td>";
		          echo "<td>".$ligne["TempsCourse"]."</td>";
		          echo "</tr>";
		          }
                $rep ->closeCursor();
                ?>
            
            
        </table>
    </body>
    
</html>