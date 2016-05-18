
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="../web/css/log.css">
        <script type="text/javascript" src="../web/js/java.js"></script>
        <title>Login</title>
    </head>
    <body>
        <div><img src="../web/images/logo.png" alt="blackmister"></div>
        <div class="col-md-offset-5 col-xs-offset-2">
            <div class="logo">Identification</div>
            <div class="login-form-1">
                <form action="log.php" method="post" id="login-form" class="text-left">
                    <div class="login-form-main-message"></div>
                    <div class="main-login-form">
                        <div class="login-group">
                            <div class="form-group">
                                <label for="lg_username" class="sr-only">Nom de compte</label>
                                <input type="text" class="form-control" id="lg_username" name="pseudo" placeholder="pseudo">
                            </div>
                            <div class="form-group">
                                <label for="lg_password" class="sr-only">Mot de passe</label>
                                <input type="password" class="form-control" id="lg_password" name="password" placeholder="mot de passe">
                            </div>
                            <?php
                            // on teste si le visiteur a soumis le formulaire de connexion
                            if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {

                                if ((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['password']) && !empty($_POST['password']))) {

                                    $base = mysqli_connect ('localhost', 'root', '', 'base v1');
                                    //mysqli_select_db ("essaie", $base)  or die("erreur de connexion a la base de donnees");

                                    // on teste si une entrée de la base contient ce couple login / pass
                                    $sql = 'SELECT * FROM employer WHERE Pseudo="'.mysqli_real_escape_string($base, $_POST['pseudo']).'" AND Password="'.mysqli_real_escape_string($base, md5($_POST['password'])).'"';

                                    $req = mysqli_query($base, $sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error());
                                    $data = mysqli_fetch_array($req);

                                    mysqli_free_result($req);
                                    mysqli_close($base);

                                    // si on obtient une réponse, alors l'utilisateur est un membre
                                    //var_dump($data);exit;
                                    if ($data != null) {
                                        session_start();
                                        $_SESSION['login'] = $data['Pseudo'];
                                        header('Location: ../indexBeta.php');
                                        exit();
                                    }
                                    // sinon, alors la, il y a un gros problème :)
                                    else {


                                        echo "<font color=\"red\"> Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.</font>";

                                    }
                                    
                                }
                                else {
                                    echo  "<font color=\"red\"> Au moins un des champs est vide.</font>";
                                }
                            }
                            ?>
                            <div class="form-group login-group-checkbox">
                                <input type="checkbox" id="lg_remember" name="lg_remember">
                                <label for="lg_remember">Se souvenir de moi</label>
                            </div>
                        </div>
                        <button type="submit" name="connexion" value="Connexion" class="login-button"><img src="../web/images/valid.png" width="40" alt="validation"></button>
                    </div>
                    <div class="etc-login-form">
                        <p>Mot de passe oublié ? <a href="#">cliquez ici</a></p>
                    </div>
                </form>
            </div>
        </div>


    </body>
</html>