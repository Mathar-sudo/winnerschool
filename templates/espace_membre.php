<?php $titre_page = 'Espace membre' ?>

<?php $active_espace_membre = true ?>

<?php ob_start(); ?>

<div class="container my-5">
    <h1 class="text-primary">Espace membre</h1>
    <hr style="width:15%">
    
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require('base.php'); ?>