<!DOCTYPE HTML>
<head>
    <title>Black Mister - Achat</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="../web/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="icon" href="web/images/favi.png" />
    <script type="text/javascript" src="../web/js/jquery-1.7.2.min.js"></script> 
    <script type="text/javascript" src="../web/js/move-top.js"></script>
    <script type="text/javascript" src="../web/js/easing.js"></script>
    <script src="../web/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <link href="../web/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="../web/css/global.css">
    <script src="../web/js/slides.min.jquery.js"></script>
    <link rel="stylesheet" href="../web/css/affiche.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script>
        $(function(){
            $('#products').slides({
                preload: true,
                preloadImage: 'img/loading.gif',
                effect: 'slide, fade',
                crossfade: true,
                slideSpeed: 350,
                fadeSpeed: 500,
                generateNextPrev: true,
                generatePagination: false
            });
        });
    </script>
</head>
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
                <li><a href="#">Deconnexion</a></li>
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