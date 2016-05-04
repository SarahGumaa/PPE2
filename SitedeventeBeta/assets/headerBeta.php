<?php
session_start();
if (!isset($_SESSION['login'])) {
    header ('Location:assets/log.php');
    exit();
}
?>
<div class="header">
    <div class="headertop_desc">
        <div class="call">
            <p><span>Besoin d'aide ?</span> appelez nous <span class="number">01.45.62.78.91</span></p>
        </div>
        <div class="account_desc">
            <ul>
                <p>Bienvenue <?php echo htmlentities(trim($_SESSION['login'])); ?> !<br /></p>
                <li><a href="indexBeta.php?user=1">Mon compte</a></li>
                <li><a href="assets/logout.php">Deconnexion</a></li>
            </ul>
        </div>
        <div class="clear"></div>    
    </div>
    <div class="header_top">
        <div class="logo">
            <a href="indexBeta.php".><img src="web/images/logo.png" alt="" /></a>
        </div>

        <div class="cart">

            <a href="indexBeta.php?user=2"><p><span>Panier</span> 0 produit(s) - 0.00€
                </p></a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="header_bottom">
        <nav class="menu">
            <ul>
                <li class="active"><a href="indexBeta.php">Acceuil</a></li>
                <li class="active"><a href="indexBeta.php?serv=1">A propos</a></li>
                <li class="active"><a href="indexBeta.php?serv=2">Contact</a></li>
                <div class="clear"></div>
            </ul>
        </nav>
        <div class="clear"></div>
    </div>
</div>