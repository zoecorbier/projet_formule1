<html>
    <head></head>
<body>
<?php


 if($_GET['n']!="" && $_GET['p']!="" && $_GET['anniversaire']!="" && $_GET['adr']!="" && $_GET['cp']!="" && $_GET['ville']!="" && $_GET['pays']!="" &&$_GET['num']!="" && $_GET['mail']!="" && $_GET['mdp1']!="" && $_GET['mdp2']!="" && $_GET['mdp1']== $_GET['mdp2']) { 

echo $_GET['n'];
echo '<BR>';
echo $_GET['p'];
echo '<BR>';
echo $_GET['anniversaire'];
echo '<BR>';
echo $_GET['adr'];
echo '<BR>';
echo $_GET['cp'];
echo '<BR>';
echo $_GET['ville'];
echo '<BR>';
echo $_GET['pays'];
echo '<BR>';
echo $_GET['num'];
echo '<BR>';
echo $_GET['mail'];
echo '<BR>';
echo $_GET['mdp1'];
echo '<BR>';
echo $_GET['mdp2'];

} 
else{
 echo "<meta http-equiv='refresh' content='2; URL=new.php'>";}

?>
</body> 

</html>
