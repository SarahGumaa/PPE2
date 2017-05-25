<?php 
include('configuration.inc.php');
if(isset($_POST['Nom'])&&($_POST['Prenom'])){
$cnx = Connection_mySql();
mysqli_select_db($cnx,"basebeta") or die("erreur de connexion a la base de donnees");
$query = "INSERT INTO `employer` (`nomEmp`, `prenomEmp`, `mailEmp`, `telFixEmp`, `telMobEmp`, `pseudo`, `password`) VALUES ('".$_POST['Nom']."','".$_POST['Prenom']."','".$_POST['Mail']."','".$_POST['TeleF']."','".$_POST['TeleP']."','".$_POST['Pseudo']."',md5('".$_POST['pwd']."'));";
$result = mysqli_query($cnx,$query) or die("erreur!!");

mysqli_close($cnx);
    header('location:admin.php');

}
//echo "ajout avec succ&eacute; <a href=\"index.php\">retour</a>"; ?>
<form method="post" action="addClient.php" class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend><h3 style="color:white">Formulaire d'inscription</h3></legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"><h4 style="color:white">Nom</h4></label>  
            <div class="col-md-4">
                <input id="textinput" name="Nom" type="text" placeholder="nom..." class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"><h4 style="color:white">Prenom</h4></label>  
            <div class="col-md-4">
                <input id="textinput" name="Prenom" type="text" placeholder="prenom..." class="form-control input-md" required="">

            </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"><h4 style="color:white">Adresse Email</h4></label>  
            <div class="col-md-4">
                <input id="textinput" name="Mail" type="text" placeholder="email..." class="form-control input-md">

            </div>
        </div>
        
        

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"><h4 style="color:white">Telephone Fixe</h4></label>  
            <div class="col-md-4">
                <input id="textinput" name="TeleF" type="text" placeholder="fixe..." class="form-control input-md" required="">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"><h4 style="color:white">Telephone Portable</h4></label>  
            <div class="col-md-4">
                <input id="textinput" name="TeleP" type="text" placeholder="portable..." class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"><h4 style="color:white">Pseudo</h4></label>  
            <div class="col-md-4">
                <input id="textinput" name="Pseudo" type="text" placeholder="pseudo..." class="form-control input-md" required="">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput"><h4 style="color:white">Mot de passe</h4></label>
            <div class="col-md-4">
                <input id="passwordinput" name="pwd" type="password" placeholder="mdp..." class="form-control input-md" required="">

            </div>
        </div>
        <!--div class="form-group">
            <label class="col-md-4 control-label" for="passwordinput"><h4 style="color:white">Retapez le mot de passe</h4></label>
            <div class="col-md-4">
                <input id="passwordinput" name="pwdb" type="password" placeholder="mdp..." class="form-control input-md" required="">

            </div>
        </div-->
    </fieldset>
    <input type="submit" name="valider" value="Inscription" class="btn btn-success col-md-offset-7">
</form>
