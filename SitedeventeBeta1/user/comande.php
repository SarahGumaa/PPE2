<?php include_once("configurations.php");
$iduser=$_SESSION['id'];
$cnx = Connection_mySql();
mysqli_select_db($cnx,"basebeta") or die("erreur de connexion a la base de donnees");
$sql = "INSERT INTO `basebeta`.`commande` (`idCmd`, `dateCmd`,`idEmp`) VALUES (NULL, NOW(), $iduser)";
$result = mysqli_query($cnx,$sql) or die("erreur!! command");
$idcat = mysqli_insert_id($cnx);
mysqli_close($cnx);

$Total = 0;
$lignes = explode('#', $_SESSION['panier']);
foreach($lignes as $line){
    $mot = explode(';',$line);
    $cnx = Connection_mySql();
    mysqli_select_db($cnx,"basebeta") or die("erreur de connexion a la base de donnees");
    $sql = 'INSERT INTO `basebeta`.`Contient` (`idProd`, `idCmd`, `qteProd`) VALUES (\''.$mot[0].'\', \''.$idcat.'\', \''.$mot[3].'\');';
    
    echo "<br>";
    echo "<tr>";
    echo "<td>";
    echo $mot[1];
    echo "</td>";
    echo "<td>";
    echo "<img src=\"imge/".$mot[2]."\" height=70 width=70/ \">";
    echo "</td>";
    echo "<td>";
    echo "      Quantité: ";
    echo $mot[3];
    echo "</td>";
    // $msg .= "<td>";
    // $msg .= $mot[4];
    // $msg .= "</td>";
    echo"<td>";
    /*$msg .= round(((($mot[2] * $mot[3])/100) + $mot[2])*$mot[4],2);
			      $Total += round(((($mot[2] * $mot[3])/100) + $mot[2])*$mot[4],2);*/
    $Total += $mot[3];
    echo "</td>";
    echo "</tr>";
    echo "<br/>";
    

    //
    $result = mysqli_query($cnx,$sql) or die("erreur!!");
    mysqli_close($cnx);
}

?>
<!doctype html>

<html>
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <span><h1></h1></span>
        <div>
            <table>
                <tr><th>Numéro de commande:
    <?php echo $idcat ?></th>
                    <th></th>
                </tr>

                
                
            </table>
        </div>

    </body>
</html>
