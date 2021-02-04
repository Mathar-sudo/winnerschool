<?php $titre_page = 'Modifier l\'élève '. $eleve->get_prenom_eleve() . ' ' . $eleve->get_nom_eleve() ?>

<?php $active_eleves = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Modifier l'élève <?= $eleve->get_prenom_eleve() . ' ' . $eleve->get_nom_eleve() ?></h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="row g-3" method="POST" action="?modifier_eleve=<?= $eleve->get_id_eleve() ?>">
            <div class="row">
                <div class="col-6">
                    <label for="input_nom" class="form-label">Nom de l'élève</label>
                    <input type="text" name="nom_eleve" value="<?= $eleve->get_nom_eleve() ?>" class="form-control" id="input_nom" required>
                    <label for="input_prenom" class="form-label">Prénom de l'élève</label>
                    <input type="text" name="prenom_eleve" value="<?= $eleve->get_prenom_eleve() ?>" class="form-control" id="input_prenom" required>
                    <label for="input_age" class="form-label">Age de l'élève</label>
                    <input type="number" name="age_eleve" value="<?= $eleve->get_age_eleve() ?>" class="form-control" id="input_age" required>
                    <label for="input_mobile" class="form-label">Mobile de l'élève</label>
                    <input type="text" name="mobile_eleve" value="<?= $eleve->get_mobile_eleve() ?>" class="form-control" id="input_mobile" required>
                    <label for="input_mail" class="form-label">Mail de l'élève</label>
                    <input type="email" name="mail_eleve" value="<?= $eleve->get_mail_eleve() ?>" class="form-control" id="input_mail" required>
                </div>
                <div class="col-6">
                    <label for="input_etablissement" class="form-label">Etablissement de l'élève</label>
                    <input type="text" name="etablissement_eleve" value="<?= $eleve->get_etablissement_eleve() ?>" class="form-control" id="input_etablissement" required>
                    <label for="input_particularite" class="form-label">Eléments spécifiques à prendre en compte de l'élève (discipline, handicap, etc.)</label>
                    <input type="text" name="particularite_eleve" value="<?= $eleve->get_particularite_eleve() ?>" class="form-control" id="input_particularite" required>
                    <label for="input_mdp" class="form-label">Mot de passe de l'élève</label>
                    <input type="password" value="winnerschool" name="mdp_eleve" class="form-control" id="input_mdp" required>
                    <label for="select_responsable" class="form-label">Classe de l'élève</label>
                    <select name="responsable_eleve" class="form-select" id="select_responsable" required>
                        <option value selected disabled>Choisissez un responsable</option>
                        <?php foreach($responsables as $responsable) { ?>  
                            <option value="<?= $responsable->get_id_responsable() ?>"><?= $responsable->get_nom_responsable() . ' ' . $responsable->get_prenom_responsable() ?></option>
                        <?php } ?>
                    </select>
                    <label for="select_classe" class="form-label">Classe de l'élève</label>
                    <select name="classe_eleve" class="form-select" id="select_classe" required>
                        <option value selected disabled>Choisissez une classe</option>
                        <?php foreach($classes as $classe) { ?>  
                        <option value="<?= $classe->get_id_classe();?>"><?= $classe->get_nom_classe();?></option>
                    <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Modifier</button>
                <a href="?eleves" class="btn btn-success">Retour</a>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>