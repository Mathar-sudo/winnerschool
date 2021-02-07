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
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="images/avatar.jpg" alt="..." class="img-thumbnail" width='100' height='100'>
                        <p class="mt-3">Nom : <?= $intervenant->get_nom_intervenant() ?></p>
                        <p>Prénom : <?= $intervenant->get_prenom_intervenant() ?></p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h5 class="text-danger">Pièces jointes</h5>
                
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
                <?php if(isset($_SESSION['admin'])){ ?>
                <div class="text-center mt-3">
                    <a href="?formulaire_modifier_intervenant=<?= $intervenant->get_id_intervenant();?> "class="btn btn-primary w-25" >Modifier</a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>