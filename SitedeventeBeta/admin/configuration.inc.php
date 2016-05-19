<?php
function Connection_mySql(){

    $hote = "localhost";


    $user = "root";

    $pwd = "";

    $connexion = mysqli_connect('localhost', 'root', '')

        or die("erreur de connexion au serveur");

    return $connexion;	 

}
?>