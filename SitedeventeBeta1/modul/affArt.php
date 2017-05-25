<?php
		
		$cnx = Connection_mySql();
		mysqli_select_db($cnx,"basebeta") or die("erreur de selection de la base de donnees affart");
		$query = 'SELECT * FROM `produit` WHERE `idProd`='.$_GET['art'].';';
		$result = mysqli_query($cnx,$query) or die("erreur!!");
		$i = 0;
		/*echo "<table border=\"0\">";
		echo "<tr>";*/
		if($row = mysqli_fetch_row($result)){
            echo        "<div class=\"product-details\">";		
            echo        "<div class=\"grid images_3_of_2\">";
            echo        "<div id=\"container\">";
            echo        "<div id=\"products_example\">";
            echo        "<div id=\"products\">";
            echo        "<!-- photo du produit -->";
            echo        "<img src=\"imge/".$row[6]."\" height=120 width=200/ \">";
            echo        "</div>";
            echo        "</div>";
            echo        "</div>";
            echo        "</div>";
            echo        "<div class=\"desc span_3_of_2\">";
            echo        "<!-- nom produit -->";
            echo        "<h2>";
            echo        $row[2];
            echo        "</h2>";			
            echo        "<div class=\"price\">";
            echo        "<!-- prix produit -->";
           
            echo        "</div>";
            echo        "<div class=\"available\">";
            echo        "<p>Options :</p>";
            echo        "<ul>";
            echo        "<li>Couleur:";
            echo        "<select>";
            echo        "<option>";
            echo        "Noir";
            echo        "</option>";
            echo        "</select>";
            echo        "</li>";
            echo        "<li>";
           /* echo        "Quantité:";
            echo        "<select>";
            echo        "<option>1</option>";
            echo        "<option>2</option>";
            echo        "<option>3</option>";
            echo        "<option>4</option>";
            echo        "<option>5</option>";
            echo        "</select>";*/
            echo        "</li>";
            echo        "</ul>";
            echo        "</div>";
            echo        "<div class=\"share-desc\">";
            
            echo        "<div class=\"button\">";
            echo        "<span>";
            echo        "<a href=\"indexBeta.php?user=2&task=add&id=".$_GET['art']."\">";
            echo        "Ajouter au panier";
            echo        "</a>";
            echo        "</span>";
            echo        "</div>";					
            echo        "<div class=\"clear\">";
            echo        "</div>";
            echo        "</div>";
            echo        "</div>";
            echo        "<div class=\"clear\">";
            echo        "</div>";
            echo        "</div>";
                
			   /*echo "<td>";
				echo "<a href=\"imge/".$row[4]."\">";
			    echo "<img src=\"imge/".$row[4]."\" height=120 width=120/>";
				echo "</a>";
			    echo "</td>";
				echo "<td>";
				echo "<table border=0 height=300>";
					echo "<tr>";
					    echo "<td>";
						  echo "<p align=\"justify\" style=\"font-style:oblique\">";
						     echo $row[1];
						  echo "</p>"; 
						  echo "<p align=\"justify\" style=\"font-style:oblique\">";
						     echo "Le prix HT : ".$row[2]."&euro;.<br/>";
							 echo "     categorie: ".$row[3]."S<br />";
                                       echo "<a href=\"index.php?user=2&task=add&id=".$_GET['art']."\">";
                                            echo "ajouter a mon panier";
                                       echo "</a>";
						  echo "</p>"; 
						echo "</td>";
					echo "</tr>";
					echo "<tr>";
					echo "</tr>";
				echo "</table>";
				echo "</td>";*/
				
		}
		/*echo "</tr>";
		echo "<table>";*/
		mysqli_close($cnx);
?>

