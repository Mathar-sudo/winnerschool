<?php $titre_page = "Modifier l'horaire de " . $horaire->get_jour_horaire() . " de " . $horaire->get_heure_horaire();?>

<?php $active_horaires = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Modifier l'horaire de : <?= $horaire->get_jour_horaire() . " de " . $horaire->get_heure_horaire();?></h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="row g-3 w-25" method="POST" action="?modifier_horaire=<?= $horaire->get_id_horaire(); ?>">
            <div class="col-12">
                <label for="input_jour" class="form-label">Jour</label>
                <input type="text" name="jour_horaire" class="form-control" value="<?= $horaire->get_jour_horaire() ?>" id="input_jour" required>
                <label for="input_heure" class="form-label">Heure</label>
                <input type="text" name="heure_horaire" class="form-control" value="<?= $horaire->get_heure_horaire() ?>" id="input_heure" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="?classes" class="btn btn-success">Retour</a>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>