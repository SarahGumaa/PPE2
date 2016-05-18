<?php  

$cnx = mysqli_connect ('localhost', 'root', '', 'base v1');
//mysqli_select_db ("base v1", $cnx)  or die("erreur de connexion a la base de donnees");
?>
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
                <img src="web/images/image-de-profil-2.jpg" style="border:1px solid grey;" width=70% height=50%/><br><br><br><br><br>
                <a href="#" class="myButton" style="margin-top:1%;">Modifiez la photo</a><br><br><br>
                <br><br><a href="#" id="lien_mes_achats" style="text-decoration:none;"><i class="fa fa-shopping-basket fa-1x" aria-hidden="true"></i>	Mes achats</a>
            </div>
            <div class="col span_1_of_3">
                <div class="contact-form">
                    <form method="post" action="contact-post.php"><br><br>
                        <div>
                            <span><label><h3>Nom</h3></label></span>
                        </div><br><br><br><br>
                        <div>
                            <span><label><h3>Prénom</h3></label></span>
                        </div><br><br><br><br>                        <div>
                        <span><label><h3>Mail</h3></label></span>
                        </div><br><br><br><br>

                    </form>
                </div>
            </div>
            <div class="col span_1_of_3">
                <div class="contact-form">
                    <form method="post" action="">
                        <h3><u>Modifiez mot de passe: </u></h3><br><br>
                        <div>
                            <span><label>Mot de passe actuel: </label></span>
                            <span><input name="ancien" type="password" class="textbox" ></span>
                        </div><br><br>
                        <div>

                            <span><label>Nouveau mot de passe: </label></span>
                            <span><input name="nvx" type="password" class="textbox" ></span>
                        </div><br><br>
                        <div>
                            <span><label>Retapez le nouveau mot de passe: </label></span>
                            <span><input name="verif" type="password" class="textbox" ></span>
                        </div><br><br><br>
                        <?php
                        if(isset($_POST['submit'])){
                            $ancien=(md5($_POST['ancien']));
                            $nvx=(md5($_POST['nvx']));
                            $verif=(md5($_POST['verif']));
                            $login=$_SESSION['login'];
                            if (($ancien!='')&&($nvx!='')&&($verif!='')) {
                                if($nvx==$verif){
                                    $sql="UPDATE employer SET Password='$nvx' WHERE Pseudo='$login' AND Password='$ancien'";
                                    $resultat=mysqli_query($cnx,$sql);

                                    if($resultat)  { 
                                        echo 'Modification du mot de passe effectuee avec succes';
                                    } else {
                                        echo $sql . '<br>';
                                        echo 'Le mot de passe actuel n\'est pas valide ';
                                    }
                                } else {
                                    echo 'Erreur entre le nouveau mot de passe entr&eacute; et la verification';
                                    }
                        }else {
                                    echo 'Veuillez remplir tous les champs';
                                }
                            } 
                        

                        ?>
                        <button name="submit" type="submit" class="myButton" style="margin-top:2%;">Modifiez le mot de passe</button>
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