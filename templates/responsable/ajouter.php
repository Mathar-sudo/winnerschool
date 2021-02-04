<?php $titre_page = 'Ajouter un responsable' ?>

<?php $active_responsables = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Ajouter un nouveau responsable</h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="g-3" method="POST" action="?ajouter_responsable">
            <div class="row">
            <div class="col-6">
                <label for="input_nom" class="form-label">Nom du responsable</label>
                <input type="text" name="nom_responsable" class="form-control" id="input_nom" required>
                <label for="input_prenom" class="form-label">Prénom du responsable</label>
                <input type="text" name="prenom_responsable" class="form-control" id="input_prenom" required>
                <label for="input_adresse" class="form-label">Adresse du responsable</label>
                <input type="text" name="adresse_responsable" class="form-control" id="input_adresse" required>
                <label for="input_cdp" class="form-label">Code postal du responsable</label>
                <input type="number" name="cdp_responsable" class="form-control" id="input_cdp" required>
                <label for="input_ville" class="form-label">Ville du responsable</label>
                <input type="text" name="ville_responsable" class="form-control" id="input_ville" required>
            </div>
            <div class="col-6">
                <label for="input_fixe" class="form-label">Fixe du responsable</label>
                <input type="text" name="fixe_responsable" class="form-control" id="input_fixe" required>
                <label for="input_mobile" class="form-label">Mobile du responsable</label>
                <input type="text" name="mobile_responsable" class="form-control" id="input_mobile" required>
                <label for="input_mail" class="form-label">Mail du responsable</label>
                <input type="email" name="mail_responsable" class="form-control" id="input_mail" required>
                <label for="input_mdp" class="form-label">Mot de passe du responsable</label>
                <input type="password" value="winnerschool" name="mdp_responsable" class="form-control" id="input_mdp" readonly>
            </div>
            </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>