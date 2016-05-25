<?php
include('configuration.inc.php');

$cnx = Connection_mySql();
mysqli_select_db($cnx,"basebeta") or die ("erreur de connexion à la base de donnée - CatAdmin");
$query = "SELECT * FROM `categorie` WHERE `supCat` = 1 LIMIT 5;";
$result = mysqli_query($cnx,$query) or die ("erreur!! CatAdmin2");

echo "<table class=\"table\">";
echo "<thead>";
echo "<tr>";
echo "<th>Indentifiant</th>";
echo "<th>Nom Catégorie</th>";
echo "<th>Sous-Catégorie</th>";
echo "<th>Images</th>";
echo "<th>Opérations</th>";
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
    
$cnx2 = Connection_mySql();
    mysqli_select_db($cnx2,"basebeta") or die ("erreur de connexion à la base de donnée - CatAdmin 3");

    $query2 = 'SELECT `nomCat` FROM `categorie` WHERE `idCat` = '.$row[2].';';

    $result2 = mysqli_query($cnx2,$query2) or die ("erreur!! - CatAdmin 2.1");

    if ($row2 = mysqli_fetch_row($result2)) {
        echo "$row2[0]";
    }
    else {
        echo "$row[2]";
    }
    mysqli_close($cnx2);
    echo "</td>";
    echo "<td>";
    echo "<img src=\"./media/$row[3]\" width=120 height=120></img>";
    echo "</td>";
    echo "<td>";
    echo "<a href=\"index2.php?mod=1&task=edit&idCat=$row[0]\">";
    echo "img src=\"./images/b_edit.png\" alt=\"editer\"></img></a>";
    echo "<br/>";
    echo "<a href=\index2.php?mod=1&task=drop&idCat=$row[0]\">";
    echo "<img src=\"./images/b_drop.png\" alt=\"supprimer\"></img></a>";
    echo "</td>";
    echo "</tr>";
}
echo "</table";
mysqli_close($cnx);
?>