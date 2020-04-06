<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../style/pagesdeux.css" type="text/css" media="screen" />
        <title>Circuit</title>
        
    </head>
    
    <body>
       <div class="projet">
            <img class="imgpres" src="../images/f1deux.jpg">
            <p id="titre">Formule 1</p>
            
            <ul>
                <li id="co"><a href="../identifification/connexion1.php">Se connecter</a></li>
                <li><a href="../identifification/enregistrement1.php">Créer un compte</a></li>
                <li><a href="../index.php">Acceuil</a></li>
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
