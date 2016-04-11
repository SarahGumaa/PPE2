<?php include("assets/header.php"); ?>
<body>
    <div class="wrap">
        <div class="header">
            <div class="headertop_desc">
                <div class="call">
                    <p><span>Besoin d'aide ?</span> appelez nous <span class="number">01.45.62.78.91</span></span></p>
        </div>
        <div class="account_desc">
            <ul>
                
                <li><a href="#">Mon compte</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_top">
        <div class="logo">
            <a href="index.php"><img src="web/images/logo.png" alt="" /></a>
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
<div class="header_slide">
    <div class="header_bottom_left">				
        <div class="categories">
            <ul>
                <h3>Catégories</h3>
                <li><a href="#">Multimédia</a></li>
                <li><a href="#">Fournitures</a></li>
                <li><a href="#">Meubles</a></li>
                <li><a href="#">Accessoires</a></li>
                <li><a href="#">Logiciels</a></li>

            </ul>
        </div>					
    </div>
    <div class="header_bottom_right">					 

    </div>
    <div class="clear"></div>
</div>
</div>
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Multimédia</h3>
            </div>
            <div class="see">

            </div>
            <div class="clear"></div>
        </div>
        <div class="section group">
            <div class="grid_1_of_4 images_1_of_4">
                <a href="achats/preview.php"><img src="web/images/feature-pic1.jpg" alt="" /></a>
                <h2>Bureaux </h2>
                <div class="price-details">
                    <div class="price-number">
                        <p><span class="rupees">420€</span></p>
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
                        <p><span class="rupees">9.99€</span></p>
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
                        <p><span class="rupees">65€</span></p>
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
                        <p><span class="rupees">250€</span></p>
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
<?php include("assets/footer.php");?>
<script type="text/javascript">
    $(document).ready(function() {			
        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

