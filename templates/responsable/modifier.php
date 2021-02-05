<?php $titre_page = 'Modifier le responsable '. $responsable->get_nom_responsable() . " " . $responsable->get_prenom_responsable();?> 

<?php $active_responsables = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Modifier le responsable : <?= $responsable->get_nom_responsable() . " " . $responsable->get_prenom_responsable();?></h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="g-3" method="POST" action="?modifier_responsable= <?= $responsable->get_id_responsable(); ?>">
            <div class="row">
            <div class="col-6">
                <label for="input_nom" class="form-label">Nom du responsable</label>
                <input type="text" name="nom_responsable" class="form-control" value="<?= $responsable->get_nom_responsable(); ?>" id="input_nom" required>
                <label for="input_prenom" class="form-label">Prénom du responsable</label>
                <input type="text" name="prenom_responsable" class="form-control" value="<?= $responsable->get_prenom_responsable(); ?>" id="input_prenom" required>
                <label for="input_adresse" class="form-label">Adresse du responsable</label>
                <input type="text" name="adresse_responsable" class="form-control" value="<?= $responsable->get_adresse_responsable(); ?>" id="input_adresse" required>
                <label for="input_cdp" class="form-label">Code postal du responsable</label>
                <input type="number" name="cdp_responsable" class="form-control" value="<?= $responsable->get_cdp_responsable(); ?>" id="input_cdp" required>
                <label for="input_ville" class="form-label">Ville du responsable</label>
                <input type="text" name="ville_responsable" class="form-control" value="<?= $responsable->get_ville_responsable(); ?>" id="input_ville" required>
            </div>
            <div class="col-6">
                <label for="input_fixe" class="form-label">Fixe du responsable</label>
                <input type="text" name="fixe_responsable" class="form-control" value="<?= $responsable->get_fixe_responsable(); ?>" id="input_fixe" required>
                <label for="input_mobile" class="form-label">Mobile du responsable</label>
                <input type="text" name="mobile_responsable" class="form-control" value="<?= $responsable->get_mobile_responsable(); ?>" id="input_mobile" required>
                <span class="text-danger" style="font-size:1.2em">Identifiants</span><br/>
                <label for="input_mail" class="form-label">Mail du responsable</label>
                <input type="email" name="mail_responsable" class="form-control" value="<?= $responsable->get_mail_responsable(); ?>" id="input_mail" required>
                <label for="input_mdp" class="form-label">Mot de passe du responsable</label>
                <input type="password" value="winnerschool" name="mdp_responsable" class="form-control" value="winnerschool" id="input_mdp" required>
            </div>
            </div>
            </div>
            <div class="col-12 mt-3 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="?responsables" class="btn btn-success">Retour</a>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>