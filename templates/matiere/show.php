<?php $titre_page = $matiere->get_nom_matiere(); ?>

<?php $active_matieres = true ?>

<?php ob_start(); ?>

<?php if(isset($matiere)){ ?>

    <p>Id de la matiere : <?= $matiere->get_id_matiere() ?></p>
    <p>Nom de la matiere : <?= $matiere->get_nom_matiere() ?></p>


<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>