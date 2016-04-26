<?php
$cnx = Connection_mySql();
		mysqli_select_db($cnx,"base v1") or die("erreur de connexion a la base de donnees");
		$query = 'SELECT * FROM `produit` WHERE `idCat`='.$_GET['cat'].';';
		$result = mysqli_query($cnx,$query) or die("erreur!!");
		$i = 0;
/*
		echo "<table border=\"0\">";
		echo "<tr>";
*/
        echo "<table class=\"table table-striped\">";
        echo    "<thead>";
        echo        "<tr>";
        echo            "<th>";
        echo            "</th>";
        echo            "<th style=\"\">";
        echo            "Nom";
        echo            "</th>";
        echo            "<th>";
        echo            "Disponibilité";
        echo            "</th>";
        echo            "<th>";
        echo            "Prix";
        echo            "</th>";
        echo        "</tr>";
        echo    "</thead>";
        echo    "<tbody>";
        
		while($row = mysqli_fetch_row($result)){
			    $i++;
                echo  "<tr>";
                echo    "<td>";
                echo        "<a href=\"indexBeta.php?art=".$row[0]."\">";
                echo        "<img src=\"imge/".$row[4]."\" height=120 width=200/ \">";
                echo        "</a>";
                echo    "</td>";
                echo    "<td>";
                echo        "<h4>";
                echo        "<a href=\"indexBeta.php?art=".$row[0]."\">";
                echo        $row[1]; 
                echo        "</a>";
                echo        "<br>";
                echo        "<small>";
                echo        "Post quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur.";
                echo        "</small>";
                echo        "</h4>";
                echo    "</td>";
                echo    "<td>";
                echo        "<img src=\"imge/".$row[4]."\" height=100 width=120/ class=\"col-md-3 col-xs-6\" alt=\"\">";
                echo    "</td>";
                echo    "<td>";
                echo        "<h2>";
                echo        $row[2]."&euro;";
                echo        "</h2>";
                echo    "</td>";
                echo   "</tr>"; 
                if($i==4){
                        $i=0;
                        echo "</tr>";
                        echo "</tr>";
                    }
            }
          
        echo    "</tbody>";
        echo"<table>";
            /*
			    echo "<td>";
				echo "<a href=\"index.php?art=".$row[0]."\">";
			    echo "<img src=\"imge/".$row[4]."\" height=120 width=120/>";
				echo "</a>";
			    echo "</td>";
				if($i==4){
				    $i=0;
					echo "</tr>";
					echo "</tr>";
				}
		}
		echo "</tr>";
		echo "<table>"; */
        
            
                    
            
       /* <table class="table table-striped">
            <thead>
                <tr>
                    <th></th><th style="">Nom</th><th>Disponibilité</th><th>Prix</th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td><a href=""><img src="../web/images/art.png" class="col-md-5 col-xs-6" alt=""></a></td>
                    <td><h4><a href="">Titre article 1 </a><br><small>Post quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur.</small></h4></td>
                    <td><img src="../web/images/dispo.png" class="col-md-3 col-xs-6" alt=""></td>
                    <td><h2>22€</h2></td>
                </tr>
                
            </tbody>
        </table>  */

		mysqli_close($cnx);
?>.