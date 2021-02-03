<?php $titre_page = $responsable->get_nom_responsable() ." ".$responsable->get_prenom_responsable(); ?>

<?php $active_responsables = true ?>

<?php ob_start(); ?>

<?php if(isset($responsable)){ ?>

    <p>Id de la responsable : <?= $responsable->get_id_responsable() ?></p>
    <p>Nom de la responsable : <?= $responsable->get_nom_responsable() ?></p>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>