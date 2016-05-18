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
                <h2>Télécharger une image</h2>

                <div class="info">Image au format « jpg » uniquement. L'image sera redimensionné automatiquement en 60*60. Une image trop volumineuse ne sera pas pris en charge!</div>

                <form enctype="multipart/form-data" action="#" method="post" onsubmit="Verif_attente('message_attente')" id="upload">
                    <label for="photo">Image :</label>
                    <input name="uploadFile" type="file" />
                    <input type="submit" name="photo" id="photo" value="Envoyer la photo" /><br/>
                </form>

                <!--ci-dessous s'affiche le message d'attente lors de l'upload d'une image-->
                <div id="message_attente" style="margin-left: 350px;"></div>
                
            </div>
            <div class="col span_1_of_3">
                <div class="contact-form">

                    <?/* php
                    $sql='SELECT * FROM employer where Pseudo=.$_SESSION['login'].'; 
                $result=mysqli_query($cnx,$sql)
                    while($row=mysql_fetch_array($result)) {
                        */?>
                    <?php
                    $sql = 'SELECT nom_emp,prenom_emp,mail_emp from employer WHERE Pseudo="'.$_SESSION['login'].'"';

                    /*éxécution de la requête*/

                    $req=mysqli_query($cnx,$sql)or die('erreur sql!<br>'.$sql.'<br>'.mysqli_error());

                    /*on met le résultat dans un tableau $data*/

                    $data = mysqli_fetch_array($req);

                    /*on assigne nos variables tirées du tableau $data*/

                    $nom = $data['0'];

                    $prenom = $data['1'];

                    $mail = $data['2'];
                    ?>

                    <?/*php
                    echo $nom;

                    echo $prenom;

                    echo $mail;*/
                    ?>
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
</body>
</html>