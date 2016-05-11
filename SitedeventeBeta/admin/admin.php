<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Page Admin</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
              </head>
        <body>
            <div class="contour col-md-6 col-md-offset-3">
                <a href="admin.php"><h1><img class="col-md-offset-3" src="../web/images/logo.png" alt=""></a><small>administration</small></h1>
                <legend></legend>
                <div class="menu col-md-2">
                    <a href=""><h3 style="color:black">Menu</h3></a>
                    <legend></legend>
                    <a href="admin.php?mode=1"><h4 class="ssMenu">Catégorie</h4></a>
                    <LEGEND></LEGEND>
                    <a href="admin.php?mode=2"><h4 class="ssMenu">Produits</h4></a>
                    <legend></legend>
                    <a href="admin.php?mode=3"><h4 class="ssMenu">Fournisseurs</h4></a>
                    <legend></legend>
                    <a href="admin.php?mode=4"><h4 class="ssMenu">Commandes</h4></a>
                </div>
                <div class="menu2 col-md-offset-3">
                    <?php 
                    if(isset($_GET['mode'])) {
                        switch($_GET['mode']) {
                            case 1 : include_once("includes php/categorie.php");
                                break;
                            case 2 : include_once("includes php/produit.php");
                                break;
                            case 3 : include_once("includes php/fournisseur.php");
                                break;
                            case 4 : include_once("includes php/commande.php");
                                break;
                        }
                    }
                    ?>
                </div>
            </div>
        </body>
        </html>