<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Winner School"/>
    <!-- Titre de page -->
    <title>Inscription d'un élève et son responsable</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <!-- Références CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <!-- Scripts JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
<div class="container my-5">
    <h1 class="text-primary">Inscription d'un élève et son responsable</h1>
    <hr style="width:15%">
    <form class="row g-3" id="form_responsable" method="POST" action="?inscription_eleve">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12" style="border-right: 1px solid #cccccc">
                <?php if(isset($erreur_responsable)){ echo $erreur_responsable; } ?>
                <h3 class="text-info">Responsable</h3>
                <div class="row">
                    <div class="col-md-6">
                        <label for="input_nom" class="form-label">Nom</label>
                        <input type="text" name="nom_responsable" class="form-control" id="input_nom" required>
                    </div>
                    <div class="col-md-6">
                        <label for="input_prenom" class="form-label">Prénom</label>
                        <input type="text" name="prenom_responsable" class="form-control" id="input_prenom" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="input_adresse" class="form-label">Adresse</label>
                        <input type="text" name="adresse_responsable" class="form-control" id="input_adresse" placeholder="5 rue de .." required>
                    </div>
                    <div class="col-md-2">
                        <label for="input_code_postal" class="form-label">CP</label>
                        <input type="number" name="code_postal_responsable" class="form-control" id="input_code_postal" required>
                    </div>
                    <div class="col-md-4">
                        <label for="input_ville" class="form-label">Ville</label>
                        <input type="text" name="ville_responsable" class="form-control" id="input_ville" required>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <label for="input_fixe" class="form-label">Téléphone fixe</label>
                        <input type="text" name="fixe_responsable" class="form-control" id="input_fixe" required>
                    </div>
                    <div class="col-md-6">
                        <label for="input_portable" class="form-label">Téléphone portable</label>
                        <input type="text" name="portable_responsable" class="form-control" id="input_portable" required>
                    </div>
                </div>
                <div class="row">
                    <span class="text-danger" style="font-size:1.2em">Identifiants</span>
                    <div class="col-md-6">
                        <label for="input_email" class="form-label">Adresse email</label>
                        <input type="email" name="email_responsable" class="form-control" id="input_email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="input_mdp" class="form-label">Mot de passe</label>
                        <input type="password" name="mdp_responsable" class="form-control" id="input_mdp" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
                <h3 class="text-info">Élève</h3>
                <div class="row">
                    <div class="col-md-6">
                        <label for="input_nom" class="form-label">Nom</label>
                        <input type="text" name="nom_eleve" class="form-control" id="input_nom" required>
                    </div>
                    <div class="col-md-6">
                        <label for="input_prenom" class="form-label">Prénom</label>
                        <input type="text" name="prenom_eleve" class="form-control" id="input_prenom" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="input_age" class="form-label">Âge</label>
                        <input type="number" name="age_eleve" class="form-control" id="input_age" required>
                    </div>
                    <div class="col-md-6">
                        <label for="select_classe" class="form-label">Classe</label>
                        <select name="classe_eleve" class="form-select" id="select_classe" required>
                            <option disabled selected value>Choisissez une classe</option>
                            <?php foreach($classes as $classe) { ?>
                                <option value="<?= $classe->get_id_classe() ?>"><?= $classe->get_nom_classe() ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="input_etablissement" class="form-label">Établissement scolaire</label>
                        <input type="text" name="etablissement_eleve" class="form-control" id="input_etablissement" required>
                    </div>
                    <div class="col-md-6">
                        <label for="input_portable" class="form-label">Téléphone portable</label>
                        <input type="text" name="portable_eleve" class="form-control" id="input_portable" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="input_particularite" class="form-label">Eléments spécifiques à prendre en compte (discipline, handicap, ...)</label>
                        <input type="text" name="particularite_eleve" class="form-control" id="input_particularite" required>
                    </div>
                </div>
                <div class="row">
                    <span class="text-danger" style="font-size:1.2em">Identifiants</span>
                    <div class="col-md-6">
                        <label for="input_email" class="form-label">Adresse email</label>
                        <input type="email" name="email_eleve" class="form-control" id="input_email" required>
                    </div>
                    <div class="col-md-6">
                        <label for="input_mdp" class="form-label">Mot de passe</label>
                        <input type="password" name="mdp_eleve" class="form-control" id="input_mdp" required>
                    </div>
                </div>
                <div class="row">
                    <span class="text-danger" style="font-size:1.2em">Horaires de cours souhaités</span>
                    <div class="col-md-6">
                        <select multiple name="horaires[]" class="form-select">
                            <?php foreach($horaires as $horaire) { ?>
                                <option value="<?= $horaire->get_id_horaire() ?>"><?= $horaire->get_jour_horaire() . ' à ' . $horaire->get_heure_horaire() ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select" name="matiere">
                            <option disabled selected value>Choisissez une matière</option>
                            <?php foreach($matieres as $matiere) { ?>
                                <option value="<?= $matiere->get_id_matiere() ?>"><?= $matiere->get_nom_matiere() ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <button type="submit" class="btn btn-primary w-25">Valider l'inscription complète</button>
        </div>
    </form>
</div>
</body>
</html>