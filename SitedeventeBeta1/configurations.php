<?php


   function Connection_mySql(){

       $hote = "localhost";
       $user = "root";
	   $pwd = "";
       $connexion = mysqli_connect('localhost', 'root', '')
	     or die("erreur de connexion au serveur");


	   return $connexion;

   }
function uploadimage($id){
    if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
	$cnx = mysqli_connect("localhost", "root", "");
	mysqli_select_db ($cnx,"basebeta");
	$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

	$sql = "UPDATE `basebeta`.`photo` SET `photoData` = '{$imgData}' WHERE photoid = {$id}";
   /* $sql = "UPDATE `basebeta`.`photo` SET `photoData` = '{$imgData}' ";*/
	$current_id = mysqli_query($cnx,$sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
	if(isset($current_id)) {
		header("Location: indexBeta.php?user=1");
	}
    }
    }

}
function uploadimages(){
    if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
	$cnx = mysqli_connect("localhost", "root", "");
	mysqli_select_db ($cnx,"basebeta");
	$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
	$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);

	$sql = "INSERT INTO photo(photoType ,photoData)
	VALUES('{$imageProperties['mime']}', '{$imgData}')";
	$current_id = mysqli_query($cnx,$sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysql_error());
	if(isset($current_id)) {
		header("Location: indexBeta.php?user=1");
	}
    }
    }

}
function viewImage($id){
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn ,"basebeta") or die(mysql_error());
    if(isset($_GET['image_id'])) {
        $sql = "SELECT imageType,imageData FROM output_images WHERE imageId='.$id.';'";
		$result = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["imageType"]);
        echo $row["imageData"];
        mysqli_close($conn);
    }
	}
function viewphoto(){
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn ,"basebeta") or die(mysql_error());
        $sql = "SELECT photoType,photoData FROM photo WHERE photoId='.$id.';'";
		$result = mysqli_query($conn,$sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["photoType"]);
        echo $row["photoData"];
	mysqli_close($conn);
}


function Get_Cat_Description($cat){

   		$cnx = Connection_mySql();
		mysqli_select_db($cnx,"basebeta") or die("erreur de connexion a la base de donnees");
		$query = 'SELECT nomCat FROM `categorie` WHERE `idCat` = '.$cat.';';
		$result = mysqli_query($cnx,$query) or die("erreur!!");
		if($row = mysqli_fetch_row($result)){
				return $row[0];
		}else{
		    return "\0";
		}
   }
function Get_Art_ref($art){

   		$cnx = Connection_mySql();

		mysqli_select_db($cnx,"basebeta") or die("erreur de connexion a la base de donnees");

		$query = 'SELECT design FROM `produit` WHERE `idProd` = '.$art.';';

		$result = mysqli_query($cnx,$query) or die("erreur!!");

		if($row = mysqli_fetch_row($result)){

				return $row[0];

		}else{

		    return "\0";

		}

   }
   function Existe_dans_Panier($id){
        $d = FALSE;
   		$ligne = explode('#', $_SESSION['panier']);
		foreach($ligne as $tmp){
			$mot = explode(';', $tmp);
			if($mot[0] == $id){
			    $d = TRUE;
			}
		}
		return $d;
   }


   function inc_qte($id){
   		$ligne = explode('#', $_SESSION['panier']);
		$l = "";
		foreach($ligne as $tmp){
			$mot = explode(';', $tmp);
			if($mot[0] == $id){
			    $mot[4]++;
			}
			$tmpb = implode(';', $mot);
			if($l == ""){
			   $l = $tmpb;
			}else{
			   $l .= "#".$tmpb;
			}
		}
		$_SESSION['panier'] = $l;
   }

    function delArtFromPanier($id){
   		$ligne = explode('#', $_SESSION['panier']);
		$l = "";
		foreach($ligne as $tmp){
			$mot = explode(';', $tmp);
			if($mot[0] != $id){
			   $tmpb = implode(';', $mot);
			   if($l == ""){
			     $l = $tmpb;
			   }else{
			    $l .= "#".$tmpb;
			   }
			}

		}
		$_SESSION['panier'] = $l;
		if($_SESSION['panier'] == ""){
			unset($_SESSION['panier']);
		}
		 echo "<script language=\"javascript\" type=\"text/javascript\">";

         echo "window.location.replace(\"indexBeta.php?user=2&task=affiche\");";

		 echo "</script>";
   }

   function change_qte($id, $qte){
   		$ligne = explode('#', $_SESSION['panier']);
		$l = "";
		foreach($ligne as $tmp){
			$mot = explode(';', $tmp);
			if($mot[0] == $id){
			    $mot[3] = $qte;
			}
			$tmpb = implode(';', $mot);
			if($l == ""){
			   $l = $tmpb;

			}else{
			   $l .= "#".$tmpb;
			}
		}
		$_SESSION['panier'] = $l;
   }

   function choix_qte($id){
   		  $cnx = Connection_mySql();
		  $key = 1;
		  if(isset($_POST['qte'])){
		  		if($_POST['id'] == $id){
		  			$key = $_POST['qte'];

				}

		  }
 		  mysqli_select_db($cnx,"basebeta") or die("erreur de connexion a la base de donnees");
		  $query = 'SELECT `QStock` FROM `produit` WHERE `idProd` = \''.$id.'\' ;';
		  $result = mysqli_query($cnx,$query) or die("erreur!!");
		  if($row = mysqli_fetch_row($result)){
		  	echo "<form action=\"indexBeta.php?user=2&task=affiche\" method=\"post\" name=\"form\">";
			echo "<input type=\"hidden\"name=\"id\" value=\"".$id."\">";
		  	echo "<select name=\"qte\" onchange=\"javascript:this.form.submit();\" >";
            if($row[0] >= 10){
			for($i=1; $i<= 10; $i++){
				echo "<option value=\"$i\"";
				if($i == $key){
					echo "selected";
				}

				echo " > $i";
			}
            }else{
			for($i=1; $i<= $row[0]; $i++){
				echo "<option value=\"$i\"";
				if($i == $key){
					echo "selected";
				}

				echo " > $i";
			}
            }
		  	echo "</select>";
		  	echo "</form>";
		 }else{
		 	echo "non disponible";
		 }

   }

   function affiche_panier(){
   		if(isset($_POST['qte'])){
				change_qte($_POST['id'], $_POST['qte']);
		}
        echo "<br><center>";
   		echo "<table class=\"table table-striped\">";
        echo "<thead>";
        echo "<tr><th>image</th><th>Nom</th><th>Quantité</th><th>Quantité</th><th>Supprimer</th></tr>";
        echo "</thead>";
        echo "";
		echo "";
		$Total = 0;
		$ligne = explode('#', $_SESSION['panier']);
		foreach($ligne as $tmp){
			$mot = explode(';', $tmp);
            echo "<tbody>";
			echo "<tr>";
			   echo "<td><a href=\"\"><img src=\"imge".$mot[2]."\" class=\"col-md-2 col-xs-6\" alt=\"\"></a></td>";
               echo "<td><h4><a href=\"\">$mot[1] </a><br><small>Post quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur.</small></h4></td>";
               echo "";
               echo "";
            echo "<td>";
            $Total += $mot[3];
            echo $mot[3];
            echo "</td>";


			   echo "<td>";
			   choix_qte($mot[0]);
			   echo "</td>";
			   echo "<td><a href=\"indexBeta.php?user=2&task=del&id=".$mot[0]."\"><img src=\"web/images/close.png\"alt=\"close\"></a></td>";
			   echo "</tr>";

		}
       echo " <tr class=\"info\">";
			   echo "<td></td>";
			   echo " <td><h2>TOTAL DE VOTRE PANIER :</h2></td>";
                echo "<td><h2><strong>$Total</strong></h2></td>";
            echo "<td></td>";
			echo "</tr>";
		echo "</tbody>";
		echo "</table>";
   }

  function SommeAPayer(){
   		$Total = 0;
		$ligne = explode('#', $_SESSION['panier']);
		foreach($ligne as $tmp){
			$mot = explode(';', $tmp);
             $Total += round($mot[2]*$mot[4],2);

		}
       echo $Total ;
		return $Total;
   }
function totalA(){
   		$Total = 0;
		$ligne = explode('#', $_SESSION['panier']);
		foreach($ligne as $tmp){
			$mot = explode(';', $tmp);
             $Total += $mot[3];
		}
       echo $Total ;
		return $Total;
   }
function SupprimerP(){
    $req="DELETE FROM `produit` WHERE `idProd` = \''.$id.'\' ;'";
    
}
?>
