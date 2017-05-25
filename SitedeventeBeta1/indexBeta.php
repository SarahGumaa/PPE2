<?php
session_start();
include_once("configurations.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <?php include("assets/headBeta.php");?>
    </head>
    <body>
        <div class="wrap">
            <?php include("assets/headerBeta.php");?>
            <div class="main">
                <?php
                if(isset($_GET['serv'])){

                    switch($_GET['serv']){
                        case 1 : include_once("serv/about.php");
                            break;

                        case 2 : include_once("serv/contact.php");
                            break;
                    }
                }
                elseif(isset($_GET['user'])){

                    switch($_GET['user']){
                        case 1 : include_once("user/moncompte.php");
                            break;

                        case 2 : include("user/basket.php");
                            break;
                        case 5 : include("user/comande.php");
                            break;
                    }
                }elseif(isset($_GET['art'])){

                ?>


                <h3><?php echo strtoupper(Get_Art_ref($_GET['art']));?></h3>

                <p>

                    <?php

                    include_once("modul/affArt.php");


                    ?>

                </p>
                <?php }else{
                ?>
                <nav class="main_nav">
                    <div class="categories">
                        <ul>
                            <h3>Catégories</h3>

                            <?php
                    $cnx = Connection_mySql();

                    mysqli_select_db($cnx,"basebeta") or die("erreur de connexion a la base de donnees");
                    $query = 'SELECT * FROM `categorie` WHERE `supCat`=1 AND `idCat` <> 1';
                    $result = mysqli_query($cnx,$query) or die("erreur!!");

                    while($row = mysqli_fetch_row($result)){
                        echo "<li><a href=\"".$_SERVER['PHP_SELF']."?cat=".$row[0]."\">".strtoupper($row[1])."</a></li>";
                    }

                    mysqli_close($cnx);
                            ?>

                        </ul>
                    </div>
                </nav>
                <section class="main_section">
                    <?php
                    if(isset($_GET['cat']) and  $_GET['cat'] <= 7 and 2<=$_GET['cat']){
                    ?>

                    <h3><?php echo strtoupper(Get_Cat_Description($_GET['cat']));?></h3>
                    <h4>Les sous-Cat&eacute;gories:</h4>
                    <p>
                        <?php
                        include_once("modul/affCat.php");
                        ?>
                    </p>

                    <?php
                    }else{
                    ?>
                    <div class="main_section_top">
                        <?php
                        if(isset($_GET['cat']) and $_GET['cat'] > 7  ){
                        ?>
                        <h3><?php echo strtoupper(Get_Cat_Description($_GET['cat']));?></h3>
                        <h4>Les produit </h4>

                        <p>

                            <?php

                            include_once("modul/affArts.php");

                            ?>

                        </p>
                        <?php

                        }else{
                        ?>
                        <div class="slider">
                            <div id="slider">
                                <div id="mover">
                                    <div id="slide-1" class="slide">
                                        <div class="slider-img">
                                            <a href="preview.php"><img src="web/images/slide-1-image.png" alt="learn more" /></a>
                                        </div>
                                        <div class="slider-text">
                                            <h3><br><span>A retrouver sur le site</span></h3>

                                            <div class="features_list">
                                                <h4>Les fournitures pour bureau en promotion rien que pour vous !</h4>
                                            </div>
                                            <a href="indexBeta.php?cat=3" class="button">Consulter maintenant</a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="slide">
                                        <div class="slider-img">
                                            <a href="preview.php"><img src="web/images/slide-3-image.jpg" alt="learn more"/></a>
                                        </div>
                                        <div class="slider-text">
                                            <h3><br><span>A retrouver sur le site </span></h3>

                                            <div class="features_list">
                                                <h4>Ordinateur de bureau performant pour toute vos tâches professionelle !</h4>
                                            </div>
                                            <a href="indexBeta.php?cat=2" class="button">Consulter maintenant</a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="slide">
                                        <div class="slider-img">
                                            <a href="preview.php"><img src="web/images/slide-2-image.jpg" alt="learn more" /></a>
                                        </div>
                                        <div class="slider-text">
                                            <h3><br><span>A retrouver sur le site </span></h3>

                                            <div class="features_list">
                                                <h4>La plupart des meubles nécessaire pour l'installation de votre entreprise disponible sur notre site !</h4>
                                            </div>

                                            <a href="indexBeta.php?cat=4" class="button">Consulter maintenant</a>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="main_section_bottom">
                        <div class="Box">
                            <div class="content">
                                <div class="content_top">
                                    <div class="heading">
                                        <h3>Nouveaux produits</h3>
                                    </div>
                                    <div class="see"></div>
                                    <div class="clear"></div>
                                </div>
                                <div class="content_bottom">
                                    <div class="section group">
                                        <div class="grid_1_of_4 images_1_of_4">
                                            <a href="achats/preview.php"><img src="web/images/feature-pic1.jpg" alt="" /></a>
                                            <h2>Bureaux </h2>
                                            <div class="price-details">
                                                <div class="price-number">

                                                </div>
                                                <div class="add-cart">
                                                    <h4><a href="preview.php">Ajouter au panier</a></h4>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="grid_1_of_4 images_1_of_4">
                                            <a href="achats/preview2.php"><img src="web/images/feature-pic2.jpg" alt="" /></a>
                                            <h2>Lot de stylo </h2>
                                            <div class="price-details">
                                                <div class="price-number">

                                                </div>
                                                <div class="add-cart">
                                                    <h4><a href="preview.php">Ajouter au panier</a></h4>
                                                </div>
                                                <div class="clear"></div>
                                            </div>

                                        </div>
                                        <div class="grid_1_of_4 images_1_of_4">
                                            <a href="achats/preview3.php"><img src="web/images/feature-pic3.jpg" alt="" /></a>
                                            <h2>Lampe design </h2>
                                            <div class="price-details">
                                                <div class="price-number">

                                                </div>
                                                <div class="add-cart">
                                                    <h4><a href="preview.php">Ajouter au panier</a></h4>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="grid_1_of_4 images_1_of_4">
                                            <a href="achats/preview4.php"><img src="web/images/feature-pic4.jpg" alt="" /></a>
                                            <h2>Double écran </h2>
                                            <div class="price-details">
                                                <div class="price-number">

                                                </div>
                                                <div class="add-cart">
                                                    <h4><a href="preview.php">Ajouter au panier</a></h4>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }

                    ?>
                </section>
                <?php
                }
                ?>
                <div class="clear"></div>
            </div>
            <?php include("assets/footer.php");?>
            <script type="text/javascript">
                $(document).ready(function() {
                    $().UItoTop({ easingType: 'easeOutQuart' });
                });
            </script>
        </div>
        <a href="#" id="toTop"><span id="toTopHover"> </span></a>
    </body>
</html>
