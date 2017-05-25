<?php



	 if(isset($_SESSION['login'])){

	 	include_once("configurations.php");

?>
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>



<div id="formulaire">

<script type="javascript/text">

</script>



<h3>Panier(<?php echo $_SESSION['login'];?>)</h3>


<?php

				if(isset($_GET['task'])){

						switch($_GET['task']){

							case "add":

							            if(isset($_GET['id'])){

							                  $cnx = Connection_mySql();

													mysqli_select_db($cnx,"basebeta") or die("erreur de connexion a la base de donnees");

													$query = 'SELECT idProd,design,img FROM `produit` WHERE `idProd` = '.$_GET['id'].';';

													$result = mysqli_query($cnx,$query) or die("erreur!! add");

													$row = mysqli_fetch_row($result);

													$ch = implode(';',$row);
													$ch .= ";1";


							            		if(isset($_SESSION['panier'])){
													  if(Existe_dans_Panier($_GET['id'])){
													  		inc_qte($_GET['id']);
													  }else{
							            			    $_SESSION['panier'] .= "#".$ch;
													}

							            		}else{

													  	$_SESSION['panier'] =  $ch;


							            		}

							            		?>

							            		<script language="javascript" type="text/javascript">



													  alert('produits ajouter avec succés');

                								  history.back();



													  </script>

							            		<?php

							            }else{

							            ?>

							                    <script language="javascript" type="text/javascript">



													  alert('aucun produit specifié');

                								  history.back();



													  </script>

											   <?php

							            }

											break;

							case "affiche":if(isset($_SESSION['panier'])){

														affiche_panier();
?>
<br />
<br />
<center>
<a href="indexBeta.php?user=5"><button type="button" class="btn btn-primary btn-lg col-md-offset-11">Commander</button></a>
</center>
                                                        <?php

												}else{

														echo "aucun produit...";

												}

											break;

							case "del" :	if(isset($_SESSION['panier'])){
												if(isset($_GET['id'])){
												  delArtFromPanier($_GET['id']);
												}
											}

											break;

						}

				}

	 }else{

	 	echo "ressource non autoris&eacute;e, veuillez vous identifier!";

	 }

?>
</div>
