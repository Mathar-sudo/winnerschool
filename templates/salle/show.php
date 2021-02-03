<?php $titre_page = $salle->get_nom_salle(); ?>

<?php $active_salles = true ?>

<?php ob_start(); ?>

<?php if(isset($salle)){ ?>
    <div class="container">
        <p>Id de la salle : <?= $salle->get_id_salle() ?></p>
        <p>Nom de la salle : <?= $salle->get_nom_salle() ?></p>
    </div>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>