<?php $titre_page = $eleve->get_nom_eleve(). " " . $eleve->get_prenom_eleve(); ?>

<?php $active_eleves = true ?>

<?php ob_start(); ?>

<?php if(isset($eleve)){ ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?eleves">Tous les élèves</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $eleve->get_nom_eleve()." ". $eleve->get_prenom_eleve() ?></li>
            </ol>
        </nav>
        <hr class="w-25">
        <div class="row">
            <div class="col-6">
                

                <div class="card">
                    <div class="card-body text-center">
                        <img src="images/avatar.jpg" alt="..." class="img-thumbnail" width='100' height='100'>
                        <p class="mt-3">Nom : <?= $eleve->get_nom_eleve() ?></p>
                        <p>Prénom : <?= $eleve->get_prenom_eleve() ?></p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body text-center">
                        <h5 class="text-danger">Coordonnées</h5>
                        <p>Mobile : <?= $eleve->get_mobile_eleve() ?></p>
                        <p>Mail : <?= $eleve->get_mail_eleve() ?></p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="text-danger">Autres renseignements</h5>
                        <p>Age : <?= $eleve->get_age_eleve() ?></p>
                        <p>Etablissement : <?= $eleve->get_etablissement_eleve() ?></p>
                        <p>Particularité : <?= $eleve->get_particularite_eleve() ?></p>
                        <p>Responsable : <?= $eleve->get_responsable() ?></p>
                        <p>Classe : <?= $eleve->get_classe() ?></p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="?formulaire_modifier_eleve=<?= $eleve->get_id_eleve();?> "class="btn btn-primary w-25" >Modifier</a>
            </div>
    </div>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>