<?php $titre_page = 'Modifier '. $pedagogue->get_nom_pedagogue() ?>

<?php $active_pedagogues = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Modifier <?= $pedagogue->get_nom_pedagogue() ?></h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="row g-3 " method="POST" action="?modifier_pedagogue=<?= $pedagogue->get_id_pedagogue() ?>">
            <div class="col-12">
                <label for="input_nom" class="form-label">Nom du pédagogue</label>
                <input type="text" name="nom_pedagogue" value="<?= $pedagogue->get_nom_pedagogue() ?>" class="form-control" id="input_nom" required>
                <label for="input_prenom" class="form-label">Prénom du pédagogue</label>
                <input type="text" name="prenom_pedagogue" value="<?= $pedagogue->get_prenom_pedagogue() ?>" class="form-control" id="input_prenom" required>
                <label for="input_mail" class="form-label">Mail du pédagogue</label>
                <input type="email" name="mail_pedagogue" value="<?= $pedagogue->get_mail_pedagogue() ?>" class="form-control" id="input_mail" required>
                <label for="input_mobile" class="form-label">Mobile du pédagogue</label>
                <input type="text" name="mobile_pedagogue" value="<?= $pedagogue->get_mobile_pedagogue() ?>" class="form-control" id="input_mobile" required>
                <label for="input_mdp" class="form-label">Mot de passe du pédagogue</label>
                <input type="password" value="winnerschool" name="mdp_pedagogue" class="form-control" id="input_mdp" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="?pedagogues" class="btn btn-success">Retour</a>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>