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
            <div class="col-5">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="images/profil.png" alt="..." width='100' height='100'>
                        <p class="mt-3">Nom : <?= $eleve->get_nom_eleve() ?></p>
                        <p>Prénom : <?= $eleve->get_prenom_eleve() ?></p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="text-primary">Coordonnées</h5>
                        <p>Mobile : <?= $eleve->get_mobile_eleve() ?></p>
                        <p>Mail : <?= $eleve->get_mail_eleve() ?></p>
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="text-primary">Autres renseignements</h5>
                        <p>Age : <?= $eleve->get_age_eleve() ?></p>
                        <p>Etablissement : <?= $eleve->get_etablissement_eleve() ?></p>
                        <p>Particularité : <?= $eleve->get_particularite_eleve() ?></p>
                        <p>Responsable : <?= $eleve->get_responsable() ?></p>
                        <p>Classe : <?= $eleve->get_classe() ?></p>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card">
                    <form class="row card-body g-3 pt-5" method="POST" action="?modifier_eleve_perso=<?= $eleve->get_id_eleve() ?>">
                        <div class="row">
                            <h5 class="text-primary">Modifier mes informations</h5>
                            <hr>
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
                                <label for="input_particularite" class="form-label">Eléments spécifiques à prendre en compte (discipline, handicap, etc.)</label>
                                <input type="text" name="particularite_eleve" value="<?= $eleve->get_particularite_eleve() ?>" class="form-control" id="input_particularite" required>
                                <label for="input_mdp" class="form-label">Mot de passe de l'élève</label>
                                <input type="password" value="winnerschool" name="mdp_eleve" class="form-control" id="input_mdp" required>
                                <label for="select_responsable" class="form-label">Responsable</label>
                                <select name="responsable_eleve" class="form-select" id="select_responsable" required>
                                    <option value="<?= $eleve->get_fk_id_responsable() ?>" selected><?= $eleve->get_responsable() ?></option>
                                    <?php foreach($responsables as $responsable) { ?> 
                                        <?php if($eleve->get_fk_id_responsable() != $responsable->get_id_responsable()) { ?> 
                                            <option value="<?= $responsable->get_id_responsable() ?>"><?= $responsable->get_prenom_responsable() . ' ' . $responsable->get_nom_responsable() ?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                                <label for="select_classe" class="form-label">Classe</label>
                                <select name="classe_eleve" class="form-select" id="select_classe" required>
                                    <option value="<?= $eleve->get_fk_id_classe() ?>" selected><?= $eleve->get_classe() ?></option>
                                    <?php foreach($classes as $classe) { ?>  
                                        <?php if($eleve->get_fk_id_classe() != $classe->get_id_classe()) { ?> 
                                            <option value="<?= $classe->get_id_classe();?>"><?= $classe->get_nom_classe();?></option>
                                        <?php } ?>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>