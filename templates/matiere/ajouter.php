<?php $titre_page = 'Ajouter une matière' ?>

<?php $active_matieres = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Ajouter une nouvelle matière</h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="row g-3 w-25" method="POST" action="?ajouter_matiere">
            <div class="col-12">
                <label for="input_nom" class="form-label">Nom de la matiere</label>
                <input type="text" name="nom_matiere" class="form-control" id="input_nom" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>