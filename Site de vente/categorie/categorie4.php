<?php include("../assets/header2.php");?>
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
            <li class="active"><a href="../index.php">Acceuil</a></li>
            <li><a href="../about.php">A propos</a></li>
            <li><a href="../contact.php">Contact</a></li>
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
                <li><a href="categorie.php">Multimédia</a></li>
                <li><a href="categorie2.php">Fournitures</a></li>
                <li><a href="categorie3.php">Meubles</a></li>
                <li class="active"><a href="categorie4.php">Accessoires</a></li>
                <li><a href="categorie5.php">Logiciels</a></li>

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
                <h3>Accessoires - Sous catégorie</h3>
            </div>
            <div class="see">

            </div>
            <div class="clear"></div>
        </div>
        <?php include("../assets/ssCateg.php"); ?>		
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

