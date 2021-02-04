<?php $titre_page = 'Ajouter une secrétaire' ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Ajouter une secrétaire</h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="row g-3 w-25" method="POST" action="?ajouter_secretaire">
            <div class="col-12">
                <label for="input_login" class="form-label">Login</label>
                <input type="text" name="login_secretaire" class="form-control" id="input_login" required>
                <label for="input_mdp" class="form-label">Mot de passe</label>
                <input type="password" name="mdp_secretaire" class="form-control" id="input_mdp" value="winnerschool" required>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>