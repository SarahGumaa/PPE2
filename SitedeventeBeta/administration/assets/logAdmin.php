<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="../web/css/logAdmin.css">
        <script type="text/javascript" src="../../web/js/java.js"></script>
        <title>Login</title>
    </head>
    <body>
        <div><img src="../../web/images/logo.png" alt="blackmister"></div>
        <div class="col-md-offset-5 col-xs-offset-2">
            <div class="logo">Identification</div>
            <div class="login-form-1">
                <form id="login-form" class="text-left">
                    <div class="login-form-main-message"></div>
                    <div class="main-login-form">
                        <div class="login-group">
                            <div class="form-group">
                                <label for="lg_username" class="sr-only">Nom de compte</label>
                                <input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="pseudo">
                            </div>
                            <div class="form-group">
                                <label for="lg_password" class="sr-only">Mot de passe</label>
                                <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="mot de passe">
                            </div>
                            <div class="form-group login-group-checkbox">
                                <input type="checkbox" id="lg_remember" name="lg_remember">
                                <label for="lg_remember">Se souvenir de moi</label>
                            </div>
                        </div>
                        <button type="submit" class="login-button"><img src="../../web/images/valid.png" width="40" alt="validation"></button>
                    </div>
                    <div class="etc-login-form">
                        <p>mot de passe oublié ? <a href="#">cliquez ici</a></p>
                    </div>
                </form>
            </div>
        </div>

<!--teste -->
    </body>
</html>