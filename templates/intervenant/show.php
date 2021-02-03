<?php $titre_page = $intervenant->get_nom_intervenant()." ".$intervenant->get_prenom_intervenant(); ?>

<?php $active_intervenants = true ?>

<?php ob_start(); ?>

<?php if(isset($intervenant)){ ?>
    <div class="container">
        <p>Id de la intervenant : <?= $intervenant->get_id_intervenant() ?></p>
        <p>Nom de la intervenant : <?= $intervenant->get_nom_intervenant() ?></p>
        <p>Prénom de la intervenant : <?= $intervenant->get_prenom_intervenant() ?></p>
    </div>


<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>