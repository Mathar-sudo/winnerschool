<?php $titre_page = $classe->get_nom_classe(); ?>

<?php $active_classes = true ?>

<?php ob_start(); ?>

<?php if(isset($classe)){ ?>
<<<<<<< HEAD

=======
>>>>>>> e71da0bd525b36790e7a6ade7b0e9a1de3307445
    <div class="container">
        <p>Id de la classe : <?= $classe->get_id_classe() ?></p>
        <p>Nom de la classe : <?= $classe->get_nom_classe() ?></p>
    </div>
<<<<<<< HEAD

=======
>>>>>>> e71da0bd525b36790e7a6ade7b0e9a1de3307445
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>