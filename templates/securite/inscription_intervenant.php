<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Winner School"/>
    <!-- Titre de page -->
    <title>Inscription d'un intervenant</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <!-- Références CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <!-- Scripts JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
<div class="container my-5">
    <h1 class="text-primary">Inscription d'un intervenant</h1>
    <hr style="width:15%">
    <?php if(isset($erreur)){ echo $erreur; } ?>
    <form class="g-3" method="POST" action="?inscription_intervenant" enctype="multipart/form-data">
    <div class="row">
        <div class="col-6" style="border-right: 1px solid #cccccc">
            <div class="row">
                <div class="col-md-6">
                    <label for="input_nom" class="form-label">Nom</label>
                    <input type="text" name="nom_intervenant" class="form-control" id="input_nom" required>
                </div>
                <div class="col-md-6">
                    <label for="input_prenom" class="form-label">Prénom</label>
                    <input type="text" name="prenom_intervenant" class="form-control" id="input_prenom" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="input_adresse" class="form-label">Adresse</label>
                    <input type="text" name="adresse_intervenant" class="form-control" id="input_adresse" placeholder="5 rue de .." required>
                </div>
                <div class="col-md-2">
                    <label for="input_code_postal" class="form-label">Code postal</label>
                    <input type="number" name="code_postal_intervenant" class="form-control" id="input_code_postal" required>
                </div>
                <div class="col-md-4">
                    <label for="input_ville" class="form-label">Ville</label>
                    <input type="text" name="ville_intervenant" class="form-control" id="input_ville" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="input_fixe" class="form-label">Téléphone fixe</label>
                    <input type="text" name="fixe_intervenant" class="form-control" id="input_fixe" required>
                </div>
                <div class="col-md-6">
                    <label for="input_portable" class="form-label">Téléphone portable</label>
                    <input type="text" name="portable_intervenant" class="form-control" id="input_portable" required>
                </div>
            </div>
            <div class="row mt-3">
                <span class="text-danger" style="font-size:1.2em">Identifiants</span>
                <div class="col-md-6">
                    <label for="input_email" class="form-label">Adresse email</label>
                    <input type="email" name="email_intervenant" class="form-control" id="input_email" required>
                </div>
                <div class="col-md-6">
                    <label for="input_mdp" class="form-label">Mot de passe</label>
                    <input type="password" name="mdp_intervenant" class="form-control" id="input_mdp" value="winnerschool" readonly>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-md-6">
                    <label for="input_niveau" class="form-label">Niveau d'études</label>
                    <input type="text" name="niveau_intervenant" class="form-control" id="input_niveau" required>
                </div>
                <div class="col-md-6">
                    <label for="input_specialite" class="form-label">Matière.s maîtrisée.s</label>
                    <input type="text" name="specialite_intervenant" class="form-control" id="input_specialite" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="input_profession" class="form-label">Profession</label>
                    <input type="text" name="profession_intervenant" class="form-control" id="input_profession" required>
                </div>
                <div class="col-md-6">
                    <label for="select_experience" class="form-label">Expérience dans le soutient scolaire</label>
                    <select name="experience_intervenant" class="form-select" id="select_experience" required>
                        <option disabled selected value>Caractérisez votre expérience</option>
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
                    <input type="text" name="connaissance_intervenant" class="form-control" id="input_connaissance" required>
                </div>
            </div>
            <hr>
            <span class="text-danger" style="font-size:1.2em">Fichiers à joindre (optionnel)</span>
            <div class="row">
                <div class="col-4">
                    <label for="casier_intervenant">Casier judiciaire</label>
                    <input type="file" name="casier_intervenant" class="form-control-file" id="casier_intervenant" accept="application/pdf">
                </div>
                <div class="col-4">
                    <label for="photo1_intervenant">Photo d'identité 1</label>
                    <input type="file" name="photo1_intervenant" class="form-control-file" id="photo1_intervenant" accept="image/png, image/jpeg">
                </div>
                <div class="col-4">
                    <label for="photo2_intervenant">Photo d'identité 2</label>
                    <input type="file" name="photo2_intervenant" class="form-control-file" id="photo2_intervenant" accept="image/png, image/jpeg">
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Inscription</button>
            </div>
        </div>
    </div>
    </form>
</div>
</body>
</html>