<?php
		
		$cnx = Connection_mySql();
		mysqli_select_db($cnx,"basebeta") or die("erreur de connexion a la base de donnees");
		$query = 'SELECT * FROM `categorie` WHERE `supCat`='.$_GET['cat'].';';
		$result = mysqli_query($cnx,$query) or die("erreur!!");
		$i = 0;
       
		while($row = mysqli_fetch_row($result)){
			    $i++;
?>
               
                <?php
                        
                    echo    "<div class=\"grid_1_of_4 images_1_of_4\">";
                    echo    "<a href=\"indexBeta.php?cat=".$row[0]."\">";
                    echo    "<img src=\"imge/photoCategorie/".$row[3]."\" height=100 width=100/>";
                    echo    "</a>";
                    echo    "<h2>";
                    echo    $row[1]; 
                    echo    "</h2>";
                    echo    "<div class=\"price-details\">";
                    echo    "<div class=\"price-number\">";
                    echo    "</div>";
                    echo    "<div class=\"add-cart\">";					
                    echo    "<h4>";
                    echo    "<a href=\"indexBeta.php?cat=".$row[0]."\">";
                    echo    "Voir";
                    echo    "</a>";
                    echo    "</h4>";
                    echo    "</div>";
                    echo    "<div class=\"clear\"></div>";
                    echo    "</div>";
                    echo    "</div>";
                   
            
                 ?>
<?php
        }
    
		mysqli_close($cnx);
?>