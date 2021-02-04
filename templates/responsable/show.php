<?php $titre_page = $responsable->get_nom_responsable() ." ".$responsable->get_prenom_responsable(); ?>

<?php $active_responsables = true ?>

<?php ob_start(); ?>

<?php if(isset($responsable)){ ?>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?responsables">Tous les responsables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $responsable->get_prenom_responsable() . ' ' . $responsable->get_nom_responsable() ?></li>
            </ol>
        </nav>
        <hr class="w-25">
        <p>Id de la responsable : <?= $responsable->get_id_responsable() ?></p>
        <p>Nom de la responsable : <?= $responsable->get_nom_responsable() ?></p>
    </div>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>