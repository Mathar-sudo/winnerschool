<?php 
    require_once('./fonction/autoload.php');
    
    $titre_page = 'Accueil';
    $active_accueil = true;
?>

<?php ob_start(); ?>

<div class="container my-5">
    <h1 class="text-primary">Accueil</h1>
    <hr style="width:15%">
    <div class="row">
        <h5>Bienvenue à l'école <span class="text-primary">WINNER SCHOOL LYON</span> | Nous sommes le <?= date("d/m/Y "); ?> et il est <?= date("H:i:s", (time() + 3600)); ?></h5>
        <div class="my-5"></div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.850124426951!2d4.873832815825993!3d45.73410042341368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea47e698511b%3A0xd6919c7c96fcfa5d!2sINSTIC!5e0!3m2!1sfr!2sfr!4v1612454425549!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require('base.php'); ?>