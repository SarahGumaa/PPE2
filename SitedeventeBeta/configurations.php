<?php


   function Connection_mySql(){

       $hote = "localhost";

      
       $user = "root";
      
	   $pwd = "";

       $connexion = mysqli_connect('localhost', 'root', '')

	     or die("erreur de connexion au serveur");

	   return $connexion;	 

   }

function Get_Cat_Description($cat){

   		$cnx = Connection_mySql();
		mysqli_select_db($cnx,"base v1") or die("erreur de connexion a la base de donnees");
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

		mysqli_select_db($cnx,"base v1") or die("erreur de connexion a la base de donnees");

		$query = 'SELECT designation FROM `produit` WHERE `idProd` = '.$art.';';

		$result = mysqli_query($cnx,$query) or die("erreur!!");

		if($row = mysqli_fetch_row($result)){

				return $row[0];

		}else{

		    return "\0";

		}

   }
?>
