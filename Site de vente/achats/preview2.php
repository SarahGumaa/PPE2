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
            <li class="active"><a href="index.php">Acceuil</a></li>
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
        <div class="section group">
            <div class="cont-desc span_1_of_2">
                <div class="product-details">				
                    <div class="grid images_3_of_2">
                        <div id="container">
                            <div id="products_example">
                                <div id="products">
                                    <img src="../web/images/feature-pic2.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc span_3_of_2">
                        <h2>Lot de stylo </h2>
                        <p>description...</p>					
                        <div class="price">
                            <p>Prix: <span>9.99€</span></p>
                        </div>
                        <div class="available">
                            <p>Options :</p>
                            <ul>
                                <li>Couleur:
                                    <select>
                                        <option>Noir</option>
                                        <option>Bleu</option>
                                        <option>Rouge</option>
                                        <option>Vert</option>
                                        <option>Rose</option>
                                    </select></li>
                                <li>Quantité:<select>
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
                            <li>Détails du produit</li>
                            <div class="clear"></div>
                        </ul>
                        <div class="resp-tabs-container">
                            <div class="product-desc">
                                Les plus du produit : </br> </br>
                        - Vous pouvez rassembler sur la tablette située sous le plateau de table les fils et les rallonges qui seront ainsi hors de vue mais toujours à portée de main. </br>
                    - Passe-câbles pour une organisation simple.</br>
                - Le tiroir inférieur possède un support qui peut s'ajuster pour recevoir des documents format A4, lettre ou juridique.</br>
            - La finition soignée à l'arrière du meuble permet de le placer au milieu de la pièce.</br>
        - Le bois massif est un matériau naturel et solide.</br>
    - Vous pouvez monter les tiroirs à droite ou à gauche en fonction de vos besoins.</br>
- Le petit compartiment du tiroir supérieur peut s'utiliser pour ranger des stylos ou autres petits objets.</br> </br>

Bon à savoir :</br></br>
Peut être complété par l'élément complémentaire pour bureau HEMNES.</br>
Si vous ajoutez un élément complémentaire, placez la combinaison contre un mur pour plus de sécurité.</br></br>

Conseil d'entretien : </br></br>
Nettoyer avec un chiffon imbibé d'un détergent doux.</br>
Terminer en essuyant avec un chiffon sec.</br></br>
Description du produit</br></br>
Plateau supérieur/ Face de tiroir/ Autres parties: Pin massif, Teinté, vernis acrylique incolore</br>
Côté de tiroir/ Arrière de tiroir: Pin massif</br>
Fond de tiroir/ Panneau arrière: Panneau de fibres de bois imprimé</br>
Garnissage panneau intérieur: Panneau de fibres de bois, Peinture acrylique imprimée</br>
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
<?php include("../assets/footer.php");?>
<script type="text/javascript">
    $(document).ready(function() {			
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

