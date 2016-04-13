<?php include("assets/header4.php");?>  
<div class="main">
    <div class="content"><br><br>
        <div class="content_top">
            <div class="heading">
                <h3>MON COMPTE</h3>
            </div>
            <div class="see">

            </div>
            <div class="clear"></div>
        </div><br><br>
        <div class="section group">
            <div class="col span_1_of_3">
                <img src="web/images/image-de-profil-2.jpg" style="border:1px solid grey;" width=70% height=50%/><br><br><br>
                <br><br><a href="#" style="text-decoration:none;">Mes achats</a><br><br><br><br><br><br><br>
                <a href="#" class="myButton" style="margin-top:1%;">Modifiez la photo</a>
            </div>
            <div class="col span_1_of_3">
                <div class="contact-form">
                    <form method="post" action="contact-post.php"><br><br>
                        <div>
                            <span><label><h3>Nom :</h3></label></span>
                            <span><input name="surname" type="text" class="textbox" ></span>
                        </div><br><br>
                        <div>
                            <span><label><h3>Prénom :</h3></label></span>
                            <span><input name="firstname" type="text" class="textbox" ></span>
                        </div><br><br>
                        <div>
                            <span><label><h3>Mail :</h3></label></span>
                            <span><input name="email" type="text" class="textbox" ></span>
                        </div><br><br>
                        <a href="#" class="myButton">Modifiez les informations</a>
                    </form>
                </div>
            </div>
            <div class="col span_1_of_3">
                <div class="contact-form">
                    <form method="post" action="contact-post.php">
                        <h3><u>Modifiez votre mot de passe :</u></h3><br><br>
                        <div>
                            <span><label>Nouveau mot de passe :</label></span>
                            <span><input name="password" type="text" class="textbox" ></span>
                        </div><br><br>
                        <div>
                            <span><label>Retapez le nouveau mot de passe :</label></span>
                            <span><input name="password" type="text" class="textbox" ></span>
                        </div><br><br><br><br><br><br><br><br>
                        <a href="#" class="myButton" style="margin-top:2%;">Modifiez le mot de passe</a>
                    </form>
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