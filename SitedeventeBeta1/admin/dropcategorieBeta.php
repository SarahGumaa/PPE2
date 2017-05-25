<?php
if ($_GET["task"] == "drop" && isset($_GET["idCat"] )) {
  echo "string";
  $cnx = Connection_mySql();
  mysqli_select_db($cnx,"basebeta") or die ("erreur de connexion à la base de donnée - CatAdmin");
  $query = "DELETE FROM `categorie` WHERE `categorie`.`idCat`= ".$_GET["idCat"]." ;";
  $result = mysqli_query($cnx,$query) or die ("erreur!! delet CatAdmin2");
  var_dump($result);
}else {
  header("Location:admin.php?mode=1");
}
