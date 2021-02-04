<?php $titre_page = 'Ajouter une horaire' ?>

<?php $active_horaires = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Ajouter une nouvelle horaire</h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="row g-3 w-25" method="POST" action="?ajouter_horaire">
            <div class="col-12">
                <label for="input_jour" class="form-label">Jour</label>
                <input type="text" name="jour_horaire" class="form-control" id="input_jour" required>
                <label for="input_heure" class="form-label">Heure</label>
                <input type="text" name="heure_horaire" class="form-control" id="input_heure" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>