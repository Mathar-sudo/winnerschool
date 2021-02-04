<?php $titre_page = $intervenant->get_nom_intervenant()." ".$intervenant->get_prenom_intervenant(); ?>

<?php ob_start(); ?>

<?php if(isset($intervenant)){ ?>
<?php if($intervenant->get_id_intervenant() == $_SESSION['id_intervenant']){ ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?intervenants">Tous les intervenants</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $intervenant->get_prenom_intervenant() . ' ' . $intervenant->get_nom_intervenant() ?></li>
            </ol>
        </nav>
        <hr class="w-25">
        <div class="row">
            <div class="col-4">
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
                        <h5 class="text-primary">Caractéristiques</h5>
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
            <div class="col-8">
                <div class="card">
                    <form class="card-body g-3" method="POST" action="?modifier_intervenant_perso=<?= $intervenant->get_id_intervenant(); ?>" >
                        <div class="row">
                            <h5 class="text-primary">Modifier mes informations</h5>
                            <hr>
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
                                    <div class="col-md-3">
                                        <label for="input_code_postal" class="form-label">CP</label>
                                        <input type="number" name="code_postale_intervenant" class="form-control" value="<?= $intervenant->get_cdp_intervenant(); ?>" id="input_code_postal" required>
                                    </div>
                                    <div class="col-md-3">
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
            </div>
        </div>
    </div>

<?php } else { header('Location: ?accueil'); } ?>
<?php } ?>

<?php $contenu = ob_get_clean(); ?>

<?php require('templates/base.php'); ?>