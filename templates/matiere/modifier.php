<?php $titre_page = 'Modifier une matière'. $matiere->get_nom_matiere() ?>

<?php $active_matieres = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Modifier la matière <?= $matiere->get_nom_matiere()?></h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="row g-3 " method="POST" action="?modifier_matiere=<?= $matiere->get_id_matiere()?>">
            <div class="col-12">
                <label for="input_nom" class="form-label">Nom de la matiere</label>
                <input type="text" name="nom_matiere" class="form-control" value="<?= $matiere->get_nom_matiere()?>" id="input_nom" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="?matieres" class="btn btn-success">Retour</a>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>