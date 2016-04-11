<?php include("assets/header.php"); ?>  	
</div>
<div class="main">
    <div class="content">
        <div class="section group">
            <div class="col span_2_of_3">
                <div class="contact-form">
                    <h2>Formulaire de contact</h2>
                    <form method="post" action="contact-post.php">
                        <div>
                            <span><label>Nom</label></span>
                            <span><input name="userName" type="text" class="textbox" ></span>
                        </div>
                        <div>
                            <span><label>E-mail</label></span>
                            <span><input name="userEmail" type="text" class="textbox"></span>
                        </div>
                        <div>
                            <span><label>Message</label></span>
                            <span><textarea name="userMsg"> </textarea></span>
                        </div>
                        <div>
                            <span><input type="submit" value="Envoyer"  class="myButton"></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col span_1_of_3">
                <div class="contact_info">
                    <h3>Trouvez nous</h3>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.404560983477!2d6.211964515898929!3d48.69774791995774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794983386479251%3A0xc58bc09976474b86!2s13+Rue+Jean+Moulin%2C+54510+Tomblaine!5e0!3m2!1sfr!2sfr!4v1455718051085" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="company_address">
                    <h3>Informations de l'entreprise :</h3>
                    <p>13 rue Jean Moulin - BP 70001,</p>
                    <p>54510 TOMBLAINE,</p>
                    <p>France</p>
                    <p>Téléphone: 03.83.18.87.02</p>
                    <p>Fax: 03.83.18.87.03</p>
                    <p>E-mail: <span>contact@m2l.fr</span></p>
                    <p>Suis nous sur: <span>Facebook</span>, <span>Twitter</span></p>
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

