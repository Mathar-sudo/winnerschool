<?php $titre_page = $admin->get_login_admin() ?>

<?php ob_start(); ?>

<?php if(isset($admin)){ ?>
<?php if($admin->get_id_admin() == $_SESSION['id_secretaire']){ ?>
    <div class="container">
        <div class="row w-25">
            <?php if(isset($success)){ echo $success; } ?>
            <div class="card">
                <div class="card-body">
                    <h5 class="text-primary">Informations</h5>
                    <hr class="w-25">
                    <p>Login : <?= $admin->get_login_admin() ?></p>
                    <p>Mot de passe : ********</p>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="text-primary">Modifier mes informations</h5>
                    <hr class="w-25">
                    <form method="POST" action="?modifier_secretaire=<?= $admin->get_id_admin() ?>">
                        <label for="input_login" class="form-label">Login</label>
                        <input type="text" name="login_secretaire" class="form-control" id="input_login" value="<?= $admin->get_login_admin() ?>" required>
                        <label for="input_mdp" class="form-label">Mot de passe</label>
                        <input type="password" name="mdp_secretaire" class="form-control" id="input_mdp" value="winnerschool" required>
                        <div class="text-center"><button type="submit" class="btn btn-primary mt-3">Modifier</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } else { header('Location: ?accueil'); } ?>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>