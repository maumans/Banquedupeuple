<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    
    <?php
        include("../Model/function.php");
        include("../Model/Ajouter.php");
        include("../Model/afficher.php");
    ?>
    <title>Document</title>
</head>
<body style="background: url('../img/j.jpg');" class="font-weight-bolder text-uppercase">
    <div class="bg-dark text-light text-center py-3">
        <h1 id="couv" style="position: relative;">           
              people's bank
        </h1>

    </div>

    <nav class="nav nav-pills nav-justified pt-3 container fixed">
        <a class="nav-item nav-link text-bold <?=active("ajout")?> <?=active("ajoutCompte")?>"  href="ajout.php">AJOUT</a>
        <a class="nav-item nav-link <?=active("affichage")?> <?=active("affichageCompte")?>"  href="affichage.php">AFFICHAGE</a>
        <a class="nav-item nav-link <?=active("modification")?>"  href="modification.php">MODIFICATION</a>
        <a class="nav-item nav-link <?=active("suppression")?>"  href="suppression.php">SUPPRESSION</a>
    </nav>
    <div class="">
        

    