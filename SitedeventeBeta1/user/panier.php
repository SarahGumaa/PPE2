<?php



if(isset($_SESSION['user'])){

  include_once("../configurations.php");

  ?>
  <script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>



  <div id="formulaire">

    <script type="javascript/text">

    </script>



    <h3>Panier(<?php echo $_SESSION['user'];?>)</h3>


    <?php

    if(isset($_GET['task'])){

      switch($_GET['task']){

        case "add":

        if(isset($_GET['id'])){

          $cnx = Connection_mySql();

          mysqli_select_db($cnx,"basebeta") or die("erreur de connexion a la base de donnees");

          $query = 'SELECT idProd,Designaton,prix_unitaire,Image FROM `Produit` WHERE `idProd` = '.$_GET['id'].';';

          $result = mysqli_query($cnx,$query) or die("erreur!!");

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
            <a href="index.php?user=5">passer la commande</a>
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
  <?php
  echo $_SESSION['panier'];
  ?>
</div>
