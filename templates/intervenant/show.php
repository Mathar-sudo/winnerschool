<?php $titre_page = $intervenant->get_nom_intervenant()." ".$intervenant->get_prenom_intervenant(); ?>

<?php $active_intervenants = true ?>

<?php ob_start(); ?>

<?php if(isset($intervenant)){ ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?intervenants">Tous les intervenants</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $intervenant->get_prenom_intervenant() . ' ' . $intervenant->get_nom_intervenant() ?></li>
            </ol>
        </nav>
        <hr class="w-25">
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-body text-center">
                        <?php if($intervenant->get_photo1_intervenant() != null) { ?>
                            <img src="images/profil.png" width="100" height="100">
                        <?php } else { ?>
                            <img src="images/profil.png" width="100" height="100">
                        <?php } ?>
                        <h3 class="mt-2 text-uppercase"><?= $intervenant->get_prenom_intervenant() . ' ' . $intervenant->get_nom_intervenant() ?></h3>
                    </div>
                </div>
                <div class="card mt-3 p-3">
                    <div class="card-body">
                        <h5 class="text-primary">Coordonnées</h5>
                        <hr class="w-25">
                        <p>Adresse email : <?= $intervenant->get_mail_intervenant() ?> </p>
                        <p>Téléphone portable : <?= $intervenant->get_mobile_intervenant() ?> </p>
                        <p>Téléphone fixe : <?= $intervenant->get_fixe_intervenant() ?> </p>
                        <h5 class="text-primary">Localisation</h5>
                        <hr class="w-25">
                        <p>Adresse : <?= $intervenant->get_adresse_intervenant() ?>, <?= $intervenant->get_cdp_intervenant() ?> (<?= $intervenant->get_ville_intervenant() ?>) </p>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-primary">Pièces jointes</h5>
                        <hr class="w-25">
                        <p>Niveau : <?= $intervenant->get_niveau_intervenant() ?></p>
                        <p>Spécialité : <?= $intervenant->get_specialite_intervenant() ?></p>
                        <p>Profession : <?= $intervenant->get_profession_intervenant() ?></p>
                        <p>Expérience : <?= $intervenant->get_experience_intervenant() ?></p>
                        <p>Connaissance : <?= $intervenant->get_connaissance_intervenant() ?></p>

                        <h5 class="text-primary">Pièces jointes</h5>
                        <hr class="w-25">
                        <?php if($intervenant->get_casier_intervenant() != null){ ?>
                            <p>Casier judiciaire : <a href="documents/<?= $intervenant->get_casier_intervenant() ?>">Ouvrir le fichier</a></p>
                        <?php } else { ?>
                            <p>Casier judiciaire : <em>Aucun</em></p>
                        <?php } ?>
                        <?php if($intervenant->get_photo1_intervenant() != null){ ?>
                            <p>Photo 1 : <a href="documents/<?= $intervenant->get_photo1_intervenant() ?>">Ouvrir le fichier</a></p>
                        <?php } else { ?>
                            <p>Photo 1 : <em>Aucune</em></p>
                        <?php } ?>
                        <?php if($intervenant->get_photo2_intervenant() != null){ ?>
                            <p>Photo 2 : <a href="documents/<?= $intervenant->get_photo2_intervenant() ?>">Ouvrir le fichier</a></p>
                        <?php } else { ?>
                            <p>Photo 2 : <em>Aucune</em></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>