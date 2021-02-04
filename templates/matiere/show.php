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
        <div class="row ">
         <div class="col-5">
            <div class="card">
                <div class="card-body text-center">
                <img src="images/<?= $matiere->get_nom_matiere() ?>.png" alt="Espagnol" class="img-thumbnail" width='300' height='200'>
                <p class="mt-3">Nom matière: <?= $matiere->get_nom_matiere() ?></p>
                
                </div>
                </div>
                </div>

    </div>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>