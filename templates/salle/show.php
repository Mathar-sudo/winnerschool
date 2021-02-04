<?php $titre_page = $salle->get_nom_salle(); ?>

<?php $active_salles = true ?>

<?php ob_start(); ?>

<?php if(isset($salle)){ ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?salles">Tous les salles</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $salle->get_nom_salle() ?></li>
            </ol>
        </nav>
        <hr class="w-25">
        <p>Id de la salle : <?= $salle->get_id_salle() ?></p>
        <p>Nom de la salle : <?= $salle->get_nom_salle() ?></p>
    </div>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>