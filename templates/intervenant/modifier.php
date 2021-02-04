<?php $titre_page = "Modifier l'intervenant"  . $intervenant->get_nom_intervenant() . " " . $intervenant->get_prenom_intervenant();?>

<?php $active_intervenants = true ?>

<?php ob_start(); ?>

    <div class="container">
        <h1 class="text-primary">Modifier l'intervenant : <?= $intervenant->get_nom_intervenant() . " " . $intervenant->get_prenom_intervenant();?></h1>
        <hr style="width:15%">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form class="g-3" method="POST" action="?modifier_intervenant=<?= $intervenant->get_id_intervenant(); ?>" >
            <div class="row">
                <div class="col-6" style="border-right: 1px solid #cccccc">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="input_nom" class="form-label">Nom</label>
                            <input type="text" name="nom_intervenant" class="form-control" value="<?= $intervenant->get_nom_intervenant(); ?>" id="input_nom" required>
                        </div>
                        <div class="col-md-6">
                            <label for="input_prenom" class="form-label">Prénom</label>
                            <input type="text" name="prenom_intervenant" value="<?= $intervenant->get_prenom_intervenant(); ?>" class="form-control" id="input_prenom" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="input_adresse" class="form-label">Adresse</label>
                            <input type="text" name="adresse_intervenant" class="form-control" value="<?= $intervenant->get_adresse_intervenant(); ?>" id="input_adresse" placeholder="5 rue de .." required>
                        </div>
                        <div class="col-md-2">
                            <label for="input_code_postal" class="form-label">Code postal</label>
                            <input type="number" name="code_postale_intervenant" class="form-control" value="<?= $intervenant->get_cdp_intervenant(); ?>" id="input_code_postal" required>
                        </div>
                        <div class="col-md-4">
                            <label for="input_ville" class="form-label">Ville</label>
                            <input type="text" name="ville_intervenant" class="form-control" value="<?= $intervenant->get_ville_intervenant(); ?>" id="input_ville" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="input_fixe" class="form-label">Téléphone fixe</label>
                            <input type="text" name="fixe_intervenant" class="form-control" value="<?= $intervenant->get_fixe_intervenant(); ?>" id="input_fixe" required>
                        </div>
                        <div class="col-md-6">
                            <label for="input_mobile" class="form-label">Téléphone portable</label>
                            <input type="text" name="mobile_intervenant" class="form-control" value="<?= $intervenant->get_mobile_intervenant(); ?>" id="input_mobile" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <span class="text-danger" style="font-size:1.2em">Identifiants</span>
                        <div class="col-md-6">
                            <label for="input_email" class="form-label">Adresse email</label>
                            <input type="email" name="mail_intervenant" class="form-control" value="<?= $intervenant->get_mail_intervenant(); ?>" id="input_email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="input_mdp" class="form-label">Mot de passe</label>
                            <input type="password" name="mdp_intervenant" class="form-control" id="input_mdp" value="winnerschool" required>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="input_niveau" class="form-label">Niveau d'études</label>
                            <input type="text" name="niveau_intervenant" class="form-control" value="<?= $intervenant->get_niveau_intervenant(); ?>" id="input_niveau" required>
                        </div>
                        <div class="col-md-6">
                            <label for="input_specialite" class="form-label">Matière.s maîtrisée.s</label>
                            <input type="text" name="specialite_intervenant" class="form-control" value="<?= $intervenant->get_specialite_intervenant(); ?>" id="input_specialite" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="input_profession" class="form-label">Profession</label>
                            <input type="text" name="profession_intervenant" class="form-control" value="<?= $intervenant->get_profession_intervenant(); ?>" id="input_profession" required>
                        </div>
                        <div class="col-md-6">
                            <label for="select_experience" class="form-label">Expérience dans le soutient scolaire</label>
                            <select name="experience_intervenant" class="form-select" id="select_experience" required>
                                <option selected value="<?= $intervenant->get_experience_intervenant(); ?>"><?= $intervenant->get_experience_intervenant(); ?></option>
                                <option value="Débutant">Débutante</option>
                                <option value="Intermédiaire">Intermédiaire</option>
                                <option value="Confirmé">Confirmée</option>
                                <option value="Professionnel">Professionnelle</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="input_connaissance" class="form-label">Connaissance du programme</label>
                            <input type="text" name="connaissance_intervenant" class="form-control" value="<?= $intervenant->get_connaissance_intervenant(); ?>" id="input_connaissance" required>
                        </div>
                    </div>
            
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Modifier</button>
                        <a href="?intervenants" class="btn btn-success">Retour</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>