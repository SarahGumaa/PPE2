<?php include("assets/header.php");?>	     
<div class="header_slide">
    <div class="header_bottom_left">				
        <div class="categories">
            <ul>
                <h3>Catégories</h3>
                <li><a href="categorie/categorie.php">Multimédia</a></li>
                <li><a href="categorie/categorie2.php">Fournitures</a></li>
                <li><a href="categorie/categorie3.php">Meubles</a></li>
                <li><a href="categorie/categorie4.php">Accessoires</a></li>
                <li><a href="categorie/categorie5.php">Logiciels</a></li>

            </ul>
        </div>					
    </div>
    <div class="header_bottom_right">					 
        <div class="slider">					     
            <div id="slider">
                <div id="mover">
                    <div id="slide-1" class="slide">			                    
                        <div class="slider-img">
                            <a href="preview.php"><img src="web/images/slide-1-image.png" alt="learn more" /></a>									    
                        </div>
                        <div class="slider-text">
                            <h1><br><span>soldes</span></h1>
                            <h2>Jusqu'à 20%</h2>
                            <div class="features_list">
                                <h4>Les fournitures pour bureau en promotion rien que pour vous !</h4>							               
                            </div>
                            <a href="categorie/categorie2.php" class="button">Acheter maintenant</a>
                        </div>			               
                        <div class="clear"></div>				
                    </div>	
                    <div class="slide">
                        <div class="slider-img">
                            <a href="preview.php"><img src="web/images/slide-3-image.jpg" alt="learn more"/></a>
                        </div>
                        <div class="slider-text">
                            <h1><br><span>Soldes</span></h1>
                            <h2>Jusqu'à 40%</h2>
                            <div class="features_list">
                                <h4>Ordinateur de bureau performant pour toute vos tâches professionelle !</h4>							               
                            </div>
                            <a href="categorie/categorie.php" class="button">Acheter maintenant</a>
                        </div>		

                        <div class="clear"></div>				
                    </div>
                    <div class="slide">						             	
                        <div class="slider-img">
                            <a href="preview.php"><img src="web/images/slide-2-image.jpg" alt="learn more" /></a>
                        </div>
                        <div class="slider-text">
                            <h1><br><span>Soldes</span></h1>
                            <h2>Jusqu'à 10%</h2>
                            <div class="features_list">
                                <h4>La plupart des meubles nécessaire pour l'installation de votre entreprise disponible sur notre site !</h4>							               
                            </div>
                            <a href="categorie/categorie3.php" class="button">Acheter maintenant</a>
                        </div>	
                        <div class="clear"></div>				
                    </div>												
                </div>		
            </div>
            <div class="clear"></div>					       
        </div>
    </div>
    <div class="clear"></div>
</div>
</div>
<div class="main">
    <div class="content">
        <div class="content_top">
            <div class="heading">
                <h3>Nouveaux produits</h3>
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