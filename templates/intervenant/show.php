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
                    <h5 class="text-primary">Coordonnées</h5>
                    <div class="card-body text-center">
                        <p>Adresse email : <?= $intervenant->get_mail_intervenant() ?> </p>
                        <p>Téléphone portable : <?= $intervenant->get_mobile_intervenant() ?> </p>
                        <p>Téléphone fixe : <?= $intervenant->get_fixe_intervenant() ?> </p>
                    </div>
                </div>
            </div>
            <div class="col-7">
            </div>
        </div>
    </div>


<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>