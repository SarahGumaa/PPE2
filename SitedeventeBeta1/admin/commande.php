<?php
include('configuration.inc.php');

$cnx = Connection_mySql();
mysqli_select_db($cnx,"basebeta") or die ("erreur de connexion à la base de donnée - CatAdmin");
$query = "SELECT * FROM `commande` ORDER BY `idCmd` DESC;";
$result = mysqli_query($cnx,$query) or die ("erreur!! CatAdmin2");

echo "<table class=\"table\">";
echo "<thead>";
echo "<tr>";
echo "<th>Identifiant</th>";
echo "<th>Date de la commande</th>";
echo "<th>Id de l'employe</th>";
echo "</tr>";
echo "</thead";
echo "<tbody>";
while ($row = mysqli_fetch_row($result)){
    echo "<tr>";
    echo "<td>";
    echo "$row[0]";
    echo "</td>";
    echo "<td>";
    echo "$row[1]";
    echo "</td>";
     echo "<td>";
    echo "$row[2]";
    echo "</td>";
   
    
/*$cnx2 = Connection_mySql();
    mysqli_select_db($cnx2,"basebeta") or die ("erreur de connexion à la base de donnée - CatAdmin 3");

    $query2 = 'SELECT `design` FROM `produit` WHERE `idCat` = '.$row[1].';';

    $result2 = mysqli_query($cnx2,$query2) or die ("erreur!! - CatAdmin 2.1");

    if ($row2 = mysqli_fetch_row($result2)) {
       // echo "$row2[0]";
    }
    else {
        //echo "$row[2]";
    }
    mysqli_close($cnx2);*/
 
}
echo "</table>";
mysqli_close($cnx);
?>