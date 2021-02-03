<?php $titre_page = $eleve->get_nom_eleve(). " " . $eleve->get_prenom_eleve(); ?>

<?php $active_eleves = true ?>

<?php ob_start(); ?>

<?php if(isset($eleve)){ ?>
    <div class="container">
        <p>Id de l'élève : <?= $eleve->get_id_eleve() ?></p>
        <p>Nom de l'élève : <?= $eleve->get_nom_eleve() ?></p>
        <p>Prénom de l'élève : <?= $eleve->get_prenom_eleve() ?></p>
        <p>Age de l'élève : <?= $eleve->get_age_eleve() ?></p>
        <p>Mobile de l'élève : <?= $eleve->get_mobile_eleve() ?></p>
        <p>Mail de l'élève : <?= $eleve->get_mail_eleve() ?></p>
        <p>Etablissement de l'élève : <?= $eleve->get_etablissement_eleve() ?></p>
        <p>Particularité de l'élève : <?= $eleve->get_particularite_eleve() ?></p>
        <p>Mot de passe de l'élève : <?= $eleve->get_mdp_eleve() ?></p>
        <p>Responsable de l'élève : <?= $eleve->get_responsable() ?></p>
        <p>Classe de l'élève : <?= $eleve->get_classe() ?></p>
    </div>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>