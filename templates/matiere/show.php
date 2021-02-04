<?php $titre_page = $matiere->get_nom_matiere(); ?>

<?php $active_matieres = true ?>

<?php ob_start(); ?>

<?php if(isset($matiere)){ ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?matieres">Toutes les matières</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $matiere->get_nom_matiere() ?></li>
            </ol>
        </nav>
        <hr class="w-25">
        <p>Id de la matiere : <?= $matiere->get_id_matiere() ?></p>
        <p>Nom de la matiere : <?= $matiere->get_nom_matiere() ?></p>
    </div>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>