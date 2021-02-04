<?php $titre_page = $intervenant->get_nom_intervenant()." ".$intervenant->get_prenom_intervenant(); ?>

<?php $active_intervenants = true ?>

<?php ob_start(); ?>

<?php if(isset($intervenant)){ ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?intervenants">Tous les intervenants</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $intervenant->get_prenom_intervenant() . ' ' . $intervenant->get_nom_intervenant() ?></li>
            </ol>
        </nav>
        <hr class="w-25">
        <p>Id de la intervenant : <?= $intervenant->get_id_intervenant() ?></p>
        <p>Nom de la intervenant : <?= $intervenant->get_nom_intervenant() ?></p>
        <p>Prénom de la intervenant : <?= $intervenant->get_prenom_intervenant() ?></p>
    </div>


<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>