
<div name="changmdp4" id="changmdp4" class="cachediv">
 
    <form method="post" action="">
        <label>Mot de passe actuel : <input type="password" name="amdp" ></label>
        <label>Nouveau mot de passe : <input type="password" name="nmdp" ></label>
        <label>Verification mot de passe : <input type="password" name="vmdp" ></label>
        <input type="submit" name="submit" value=" Envoyer ">
    </form>
     
    <?php
        $result=false;
        if(isset($_POST['submit'])){
        $amdp=$_POST['amdp'];
        $nmdp=$_POST['nmdp'];
        $vmdp=$_POST['vmdp'];
        $login=$_SESSION['login'];
            if (($amdp!='')&&($nmdp!='')&&($vmdp!='')) {
                if ($amdp==$_SESSION['password']){
                    if($nmdp==$vmdp){
                    $sql="UPDATE users SET password='$nmdp' WHERE login='$login'";
                    $result=mysql_query($sql);
                    echo 'Modification du mot de passe effectuee avec succes';
                    $_SESSION['password']=$nmdp;
                    } else {
                        echo 'Erreur entre le nouveau mot de passe entr&eacute; et la verification';
                    }
                } else {
                    echo 'Le mot de passe actuel n\'est pas valide';
                    }
            } else {
                echo 'Veuillez remplir tous les champs';
            }
        } 
                 
    ?>
</div>