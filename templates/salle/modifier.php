<?php $titre_page = 'Modifier une salle' ?>

<?php $active_salles = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Modifier la salle <?= $salle->get_nom_salle()?></h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="row g-3 w-25" method="POST" action="?modifier_salle=<?= $salle->get_id_salle()?>">
            <div class="col-12">
                <label for="input_nom" class="form-label">Nom de la salle</label>
                <input type="text" name="nom_salle" class="form-control" id="input_nom" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="?salles" class="btn btn-success">Retour</a>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>