<?php $titre_page = $pedagogue->get_prenom_pedagogue()." ".$pedagogue->get_nom_pedagogue(); ?>

<?php ob_start(); ?>

<?php if(isset($pedagogue)){ ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?pedagogues">Tous les pédagogues</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $pedagogue->get_prenom_pedagogue() . ' ' . $pedagogue->get_nom_pedagogue() ?></li>
            </ol>
        </nav>
        <hr class="w-25">
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="images/profil.png" width='100' height='100'>
                        <h3 class="mt-2 text-uppercase"><?= $pedagogue->get_prenom_pedagogue()." ".$pedagogue->get_nom_pedagogue(); ?></h3>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                    <h5 class="text-primary">Coordonnées</h5>
                    <p>Téléphone mobile : <?= $pedagogue->get_mobile_pedagogue() ?></p>
                    <p>Email : <?= $pedagogue->get_mail_pedagogue() ?></p>
                    <p>Mot de passe : ********</p>
                </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card">
                    <form class="row card-body g-3 " method="POST" action="?modifier_pedagogue_perso=<?= $pedagogue->get_id_pedagogue() ?>">
                        <h5 class="text-primary">Modifier mes informations</h5>
                        <hr>
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
            </div>
        </div>
       
    </div>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>