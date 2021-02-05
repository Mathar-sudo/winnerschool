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
        <p>Nom : <?= $intervenant->get_nom_intervenant() ?></p>
        <p>Prénom : <?= $intervenant->get_prenom_intervenant() ?></p>
    </div>

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