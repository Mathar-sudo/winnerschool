<?php $titre_page = $classe->get_nom_classe(); ?>

<?php $active_classes = true ?>

<?php ob_start(); ?>

<?php if(isset($classe)){ ?>

    <div class="container">
        <p>Id de la classe : <?= $classe->get_id_classe() ?></p>
        <p>Nom de la classe : <?= $classe->get_nom_classe() ?></p>
    </div>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>