<?php $titre_page = 'Modifier la classe ' . $classe->get_nom_classe() ?>

<?php $active_classes = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Modifier la classe : <?= $classe->get_nom_classe() ?></h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="row g-3 w-25" method="POST" action="?modifier_classe=<?= $classe->get_id_classe(); ?>">
            <div class="col-12">
                <label for="input_nom" class="form-label">Nom de la classe</label>
                <input type="text" name="nom_classe" value="<?= $classe->get_nom_classe() ?>" class="form-control" id="input_nom" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="?classes" class="btn btn-success">Retour</a>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>