<?php $titre_page = 'Ajouter un pédagogue' ?>

<?php $active_pedagogues = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Ajouter un nouveau pédagogue</h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="row g-3 w-25" method="POST" action="?ajouter_pedagogue">
            <div class="col-12">
                <label for="input_nom" class="form-label">Nom du pédagogue</label>
                <input type="text" name="nom_pedagogue" class="form-control" id="input_nom" required>
                <label for="input_prenom" class="form-label">Prénom du pédagogue</label>
                <input type="text" name="prenom_pedagogue" class="form-control" id="input_prenom" required>
                <label for="input_mail" class="form-label">Mail du pédagogue</label>
                <input type="email" name="mail_pedagogue" class="form-control" id="input_mail" required>
                <label for="input_mobile" class="form-label">Mobile du pédagogue</label>
                <input type="text" name="mobile_pedagogue" class="form-control" id="input_mobile" required>
                <label for="input_mdp" class="form-label">Mot de passe du pédagogue</label>
                <input type="password" value="winnerschool" name="mdp_pedagogue" class="form-control" id="input_mdp" readonly>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>