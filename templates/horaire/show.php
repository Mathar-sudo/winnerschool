<?php $titre_page = $horaire->get_jour_horaire(). " à " .$horaire->get_heure_horaire(); ?>

<?php $active_horaires = true ?>

<?php ob_start(); ?>

<?php if(isset($horaire)){ ?>
    <div class="container">
        <p>Id de l'horaire : <?= $horaire->get_id_horaire() ?></p>
        <p>Jour de l'horaire : <?= $horaire->get_jour_horaire() ?></p>
        <p>Heure de l'horaire : <?= $horaire->get_heure_horaire() ?></p>
    </div>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>