<?php $titre_page = $responsable->get_prenom_responsable() ." ".$responsable->get_nom_responsable(); ?>

<?php ob_start(); ?>

<?php if(isset($responsable)){ ?>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?responsables">Tous les responsables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $responsable->get_prenom_responsable() . ' ' . $responsable->get_nom_responsable() ?></li>
            </ol>
        </nav>
        <hr class="w-25">
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-body text-center">
                    <img src="images/profil.png" alt="..." width='100' height='100'>
                    <h3 class="mt-2 text-uppercase"><?= $responsable->get_prenom_responsable()." ".$responsable->get_nom_responsable(); ?></h3>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                    <h5 class="text-primary">Coordonnées</h5>
                    <p>Adresse : <?= $responsable->get_adresse_responsable() ?></p>
                    <p>Code Postale : <?= $responsable->get_cdp_responsable() ?></p>
                    <p>Ville : <?= $responsable->get_ville_responsable() ?></p>
                    <p>Téléphone fixe : <?= $responsable->get_fixe_responsable() ?></p>
                    <p>Téléphone mobile : <?= $responsable->get_mobile_responsable() ?></p>
                    <p>Email : <?= $responsable->get_mail_responsable() ?></p>
                    <p>Mot de passe : ********</p>
                </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card">
                    <form class="card-body g-3" method="POST" action="?modifier_responsable_perso= <?= $responsable->get_id_responsable(); ?>">
                        <div class="row">
                        <h5 class="text-primary">Modifier mes informations</h5>
                        <hr>
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
                        <div class="col-12 text-center mt-3">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                            <a href="?responsables" class="btn btn-success">Retour</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      
    </div>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>