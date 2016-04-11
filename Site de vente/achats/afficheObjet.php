<div class="cont-desc span_1_of_2">
    <div class="product-details">				
        <div class="grid images_3_of_2">
            <div id="container">
                <div id="products_example">
                    <div id="products">
                        <!-- photo du produit -->
                        <img src="" alt="photo produit" />
                    </div>
                </div>
            </div>
        </div>
        <div class="desc span_3_of_2">
            <!-- nom produit -->
            <h2> </h2>			

            <div class="price">
                <!-- prix produit -->
                <p>Prix: <span>€</span></p>
            </div>
            <div class="available">
                <p>Options :</p>
                <ul>
                    <li>Couleur:
                        <select>
                            <option>Noir</option>
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
                <!-- description produit -->
                <div class="product-desc">

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