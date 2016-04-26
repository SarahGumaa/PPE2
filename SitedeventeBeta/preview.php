<!DOCTYPE HTML>
<head>
    <title>Black Mister - Achat</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="web/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="web/js/jquery-1.7.2.min.js"></script> 
    <script type="text/javascript" src="web/js/move-top.js"></script>
    <script type="text/javascript" src="web/js/easing.js"></script>
    <script src="web/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <link href="web/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="web/css/global.css">
    <script src="web/js/slides.min.jquery.js"></script>
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
                <li><a href="#bot">Création de compte</a></li>
                
                <li><a href="#">Livraison</a></li>
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
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="delivery.php">Delivery</a></li>
            <li><a href="news.php">News</a></li>
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
        <div class="content_top">
            <div class="back-links">
                <p><a href="index.php">Home</a> >>>> <a href="#">Electronics</a></p>
            </div>
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
                                        <a href="#" target="_blank"><img src="web/images/productslide-1.jpg" alt=" " /></a>
                                        <a href="#" target="_blank"><img src="web/images/productslide-2.jpg" alt=" " /></a>
                                        <a href="#" target="_blank"><img src="web/images/productslide-3.jpg" alt=" " /></a>					
                                        <a href="#" target="_blank"><img src="web/images/productslide-4.jpg" alt=" " /></a>
                                        <a href="#" target="_blank"><img src="web/images/productslide-5.jpg" alt=" " /></a>
                                        <a href="#" target="_blank"><img src="web/images/productslide-6.jpg" alt=" " /></a>
                                    </div>
                                    <ul class="pagination">
                                        <li><a href="#"><img src="web/images/thumbnailslide-1.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="web/images/thumbnailslide-2.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="web/images/thumbnailslide-3.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="web/images/thumbnailslide-4.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="web/images/thumbnailslide-5.jpg" alt=" " /></a></li>
                                        <li><a href="#"><img src="web/images/thumbnailslide-6.jpg" alt=" " /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="desc span_3_of_2">
                        <h2>Lorem Ipsum is simply dummy text </h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>					
                        <div class="price">
                            <p>Price: <span>$500</span></p>
                        </div>
                        <div class="available">
                            <p>Available Options :</p>
                            <ul>
                                <li>Color:
                                    <select>
                                        <option>Silver</option>
                                        <option>Black</option>
                                        <option>Dark Black</option>
                                        <option>Red</option>
                                    </select></li>
                                <li>Size:<select>
                                    <option>Large</option>
                                    <option>Medium</option>
                                    <option>small</option>
                                    <option>Large</option>
                                    <option>small</option>
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
                                <p>Share Product :</p>
                                <ul>
                                    <li><a href="#"><img src="web/images/facebook.png" alt="" /></a></li>
                                    <li><a href="#"><img src="web/images/twitter.png" alt="" /></a></li>					    
                                </ul>
                            </div>
                            <div class="button"><span><a href="#">Add to Cart</a></span></div>					
                            <div class="clear"></div>
                        </div>
                        <div class="wish-list">
                            <ul>
                                <li class="wish"><a href="#">Add to Wishlist</a></li>
                                <li class="compare"><a href="#">Add to Compare</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="product_desc">	
                    <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                            <li>Product Details</li>
                            <li>product Tags</li>
                            <li>Product Reviews</li>
                            <div class="clear"></div>
                        </ul>
                        <div class="resp-tabs-container">
                            <div class="product-desc">
                                <p>Lorem Ipsum is simply dummy text of the <span>printing and typesetting industry</span>. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <span>when an unknown printer took a galley of type and scrambled</span> it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<span> It has survived not only five centuries</span>, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>					</div>

                            <div class="product-tags">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <h4>Add Your Tags:</h4>
                                <div class="input-box">
                                    <input type="text" value="">
                                </div>
                                <div class="button"><span><a href="#">Add Tags</a></span></div>
                            </div>	

                            <div class="review">
                                <h4>Lorem ipsum Review by <a href="#">Finibus Bonorum</a></h4>
                                <ul>
                                    <li>Price :<a href="#"><img src="web/images/price-rating.png" alt="" /></a></li>
                                    <li>Value :<a href="#"><img src="web/images/value-rating.png" alt="" /></a></li>
                                    <li>Quality :<a href="#"><img src="web/images/quality-rating.png" alt="" /></a></li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <div class="your-review">
                                    <h3>How Do You Rate This Product?</h3>
                                    <p>Write Your Own Review?</p>
                                    <form>
                                        <div>
                                            <span><label>Nickname<span class="red">*</span></label></span>
                                            <span><input type="text" value=""></span>
                                        </div>
                                        <div><span><label>Summary of Your Review<span class="red">*</span></label></span>
                                            <span><input type="text" value=""></span>
                                        </div>						
                                        <div>
                                            <span><label>Review<span class="red">*</span></label></span>
                                            <span><textarea> </textarea></span>
                                        </div>
                                        <div>
                                            <span><input type="submit" value="SUBMIT REVIEW"></span>
                                        </div>
                                    </form>
                                </div>				
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
                        <li><a href="http://www.facebook.com" target="_blank"><img src="web/images/facebook.png" alt="" /></a></li>
                        <li><a href="http://www.twitter.com" target="_blank"><img src="web/images/twitter.png" alt="" /></a></li>
                        <li><a href="http://www.skype.com" target="_blank"><img src="web/images/skype.png" alt="" /> </a></li>
                        <li><a href="#" target="_blank"> <img src="web/images/dribbble.png" alt="" /></a></li>
                        <li><a href="#" target="_blank"> <img src="web/images/linkedin.png" alt="" /></a></li>
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

