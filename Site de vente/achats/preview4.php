<?php include("../assets/header3.php");?>
<body>
    <div class="wrap">
        <div class="header">
            <div class="headertop_desc">
                <div class="call">
                    <p><span>Besoin d'aide ?</span> appelez nous <span class="number">01.45.62.78.91</span></span></p>
        </div>
        <div class="account_desc">
            <ul>
                <li><a href="#bot">Création de compte</a></li>
                
                <li><a href="#">Livraison</a></li>
                <li><a href="#">Mon compte</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_top">
        <div class="logo">
            <a href="../index.php"><img src="../web/images/logo.png" alt="" /></a>
        </div>
        <div class="cart">

            <p><span>Panier</span><div id="dd" class="wrapper-dropdown-2"> 0 produit(s) - 0.00€
            <ul class="dropdown">
                <li>Vous n'avez aucun produits dans votre panier</li>
            </ul></div></p>
    </div>
    <script type="text/javascript">
        function DropDown(el) {
            this.dd = el;
            this.initEvents();
        }
        DropDown.prototype = {
            initEvents : function() {
                var obj = this;

                obj.dd.on('click', function(event){
                    $(this).toggleClass('active');
                    event.stopPropagation();
                });	
            }
        }

        $(function() {

            var dd = new DropDown( $('#dd') );

            $(document).click(function() {
                // all dropdowns
                $('.wrapper-dropdown-2').removeClass('active');
            });

        });

    </script>
    <div class="clear"></div>
    </div>
<div class="header_bottom">
    <div class="menu">
        <ul>
            <li><a href="index.php">Acceuil</a></li>
            <li><a href="about.php">A propos</a></li>
            <li><a href="contact.php">Contact</a></li>
            <div class="clear"></div>
        </ul>
    </div>
    <div class="clear"></div>
</div>	     	
</div>
<div class="main">
    <div class="content">
        <div class="clear"></div>
    </div>
    <div class="section group">
        <div class="cont-desc span_1_of_2">
            <div class="product-details">				
                <div class="grid images_3_of_2">
                    <div id="container">
                        <div id="products_example">
                            <div id="products">
                                <div class="slides_container">
                                    <a href="#" target="_blank"><img src="../web/images/feature-pic4.jpg" alt=" " /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desc span_3_of_2">
                    <h2>Double écran </h2>
                    <p>Le doube écran a été testé pour offrir un cycle de vie de 10 fois supérieur à celui des marques compétitives, à presque moitié prix.</p>					
                    <div class="price">
                        <p>Prix: <span>250€</span></p>
                    </div>
                    <div class="available">
                        <p>Options disponible :</p>
                        <ul>
                            <li>Color:
                                <select>
                                    <option>Gris</option>
                                    <option>Noir</option>
                                    <option>Noir opaque</option>
                                </select></li>
                            <li>Quality:<select>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select></li>
                        </ul>
                    </div>
                    <div class="share-desc">
                        <div class="share">
                            <p>Partager le produit :</p>
                            <ul>
                                <li><a href="#"><img src="../web/images/facebook.png" alt="" /></a></li>
                                <li><a href="#"><img src="../web/images/twitter.png" alt="" /></a></li>					    
                            </ul>
                        </div>
                        <div class="button"><span><a href="#">Ajouter au panier</a></span></div>					
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="product_desc">	
                <div id="horizontalTab">
                    <ul class="resp-tabs-list">
                        <li>DÉTAILS DU PRODUIT</li>
                        <div class="clear"></div>
                    </ul>
                    <div class="resp-tabs-container">
                        <div class="product-desc">
                            <p>Construction robuste en aluminium poli ! L'Ergotron Bras LX bi-écran juxtaposés a été testé pour offrir un cycle de vie de 10 fois supérieur à celui des marques compétitives, à presque moitié prix. Créez une configuration juxtaposée totalement ajustable élevant les deux écrans LCD à une hauteur plus aisée pour les yeux et dégageant ainsi une précieuse surface de travail.<br/><br/>Repositionnez vos écrans LCD en un seul toucher : en haut, en bas, en avant, en arrière. Le double bras LX permet un déplacement sans égal. Économisez du temps en utilisant plusieurs applications en même temps au lieu d'aller et venir entre les documents et les programmes.<br/><br/></p>
                            <p>Caractéristiques principales : </p>
                            <p>Positionne les écrans LCD pour un confort ergonomique maximum avec une série inégalée de mouvements. Encourage le bien-être dans tout espace de travail<br/>Le système de gestion des câbles achemine les câbles sous le bras, à l’écart<br/>Dégage de l’espace sur votre bureau et augmente ainsi votre espace de travail<br/>L’ajustement vertical de 33 cm (13 pouces) satisfera les besoins ergonomiques de 9 adultes sur 10<br/>Extension des écrans LCD ou des ordinateurs portables jusqu’à 64 cm (25 pouces) avec un réglage de 457 mm (18 pouces). Mettez l’écran de côté lorsque vous ne l’utilisez pas<br/>Augmentez votre productivité. Consultez notre calculateur de rentabilité de l’investissement multi-écrans afin de déterminer les avantages que vous apportera l’ajout d’un écran supplémentaire<br/>Ouvrez et visualisez des applications et des documents multiples, en éliminant les allées et venues entre les applications<br/>Faites facilement passer un ou les deux écrans du mode horizontal au mode vertical et visualisez ainsi des pages entières sans devoir faire défiler la page<br/>Avec une technologie de motion brevetée, ces bras permettent des réglages par simple toucher sans aucun bouton ni levier<br/>Facile à utiliser, installation simple et ajustable en un simple geste<br/>Poids maximal supporté : 18 kg (9 kg par écran)</p>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#horizontalTab').easyResponsiveTabs({
                        type: 'default', //Types: default, vertical, accordion           
                        width: 'auto', //auto or any width like 600px
                        fit: true   // 100% fit in a container
                    });
                });
            </script>		
        </div>
        <div class="rightsidebar span_3_of_1">
            <div class="subscribe">
                <h2>S'inscrire à la Newsletters</h2>
                <p>Cela permet de recevoir des notifications sur les nouveaux prodtuis en exclusivité !</p>
                <div class="signup">
                    <form>
                        <input type="text" value="Adresse e-mail" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';"><input type="submit" value="S'inscrire">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="footer">
    <div class="wrap">	
        <div class="section group">
            <div class="col_1_of_4 span_1_of_4">
                <h4>Information</h4>
                <ul>
                    <li><a href="about.php">A propos</a></li>
                    <li><a href="contact.php">Service consommateur</a></li>
                    <li><a href="#">Recherche avancé</a></li>
                    <li><a href="delivery.php">Retourner son colis</a></li>
                    <li><a href="contact.php">Contacter nous</a></li>
                </ul>
            </div>
            <div class="col_1_of_4 span_1_of_4">
            </div>
            <div class="col_1_of_4 span_1_of_4">		
            </div>
            <div class="col_1_of_4 span_1_of_4">
                <h4>Contact</h4>
                <ul>
                    <li><span>+33 6 74 86 98 12</span></li>
                    <li><span>+33 6 45 85 65 25</span></li>
                </ul>
                <div class="social-icons">
                    <h4>Suis nous</h4>
                    <ul>
                        <li><a href="http://www.facebook.com" target="_blank"><img src="../web/images/facebook.png" alt="" /></a></li>
                        <li><a href="http://www.twitter.com" target="_blank"><img src="../web/images/twitter.png" alt="" /></a></li>
                        <li><a href="http://www.skype.com" target="_blank"><img src="../web/images/skype.png" alt="" /> </a></li>
                        <li><a href="#" target="_blank"> <img src="../web/images/dribbble.png" alt="" /></a></li>
                        <li><a href="#" target="_blank"> <img src="../web/images/linkedin.png" alt="" /></a></li>
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>			
    </div>
    <div class="copy_right">
        <p>Black Mister © All rights Reseverd | Design by Alexandre </p>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {			
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

