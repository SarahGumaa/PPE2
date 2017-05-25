
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
        <?php
        $cnx = mysqli_connect ('localhost', 'root', '', 'basebeta');
        //mysqli_select_db ("basebeta", $cnx)  or die("erreur de connexion a la base de donnees");
        $sql = 'SELECT nomEmp,prenomEmp,mailEmp,photo from employer WHERE pseudo="'.$_SESSION['login'].'"';

        /*éxécution de la requête*/

        $req=mysqli_query($cnx,$sql)or die('erreur sql!<br>'.$sql.'<br>'.mysql_error());

        /*on met le résultat dans un tableau $data*/

        $data = mysqli_fetch_array($req);

        /*on assigne nos variables tirées du tableau $data*/

        $nom = $data['0'];

        $prenom = $data['1'];

        $mail = $data['2'];

        $id  =  $data['3'];
        ?>
        <div class="section group">

            <div class="col span_1_of_3">
                <img src=" <?php viewphoto($id)?>" width=70% height=50%/><br><br><br>
                <form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
                    <label>Upload Image File:</label><br/>
                    <input name="userImage" type="file" class="inputFile" />

                    <input type="submit" value="Modifier" class="myButton" />
                </form>
            </div>
            <div class="col span_1_of_3">
                <div class="contact-form">





                    <form method="post" action=""><br><br>


                        <div>
                            <span><label><h3>Nom</h3></label></span>
                            <?php echo $nom; ?>

                        </div><br><br><br><br>
                        <div>
                            <span><label><h3>Prénom</h3></label></span>
                            <?php echo $prenom; ?>

                        </div><br><br><br><br>                        <div>
                        <span><label><h3>Mail</h3></label></span>
                        <?php echo $mail; ?>

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
