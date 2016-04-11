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
    <div class="search_box">
        <form>
            <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
        </form>
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
                                    <div class="slides_container">
                                        <a href="#" target="_blank"><img src="../web/images/feature-pic3.jpg" alt=" " /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc span_3_of_2">
                        <h2>Lampe design</h2>
                        <p>Lampe de bureau design.</p>					
                        <div class="price">
                            <p>Prix: <span>49€</span></p>
                        </div>
                        <div class="available">
                            <p>Options disponible :</p>
                            <ul>
                                <li>Couleur:
                                    <select>
                                        <option>Argenté</option>
                                        <option>Noir</option>
                                        <option>Noir opaque</option>
                                        <option>Gris</option>
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
                                <p>Plus qu’une lampe, la Lampe design est un signe en trois dimensions, une sculpture de lumière, une présence qui nous tient compagnie aussi bien sur un bureau que sur un meuble. Aussi belle allumée qu’éteinte, la lampe design utilise la technologie L.E.D. pour optimiser et réduire au maximum la source de lumière. Grâce au savoir-faire unique mis en oeuvre par l’entreprise, elle représente également la réalisation d’un nouveau défi technologique.</p>
                                <p>Livraison sous 48h</p>
                                <p>Caractéristiques :<br/>Coloris argent, noir ou noir opaque et gris.<br/>Source LED 4,6W.<br/>Protection IP20.</p>
                                <p>Dimensions :<br/>L. 15 cm, P. 61 cm, H. 57 cm</p>
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

