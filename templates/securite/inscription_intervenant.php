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
    <form class="row g-3">
        <div class="col-md-6">
            <label for="input_nom" class="form-label">Nom</label>
            <input type="text" name="nom_intervenant" class="form-control" id="input_nom">
        </div>
        <div class="col-md-6">
            <label for="input_prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="input_prenom">
        </div>
        <div class="col-md-6">
            <label for="input_adresse" class="form-label">Adresse</label>
            <input type="text" name="adresse_intervenant" class="form-control" id="input_adresse" placeholder="5 rue de ..">
        </div>
        <div class="col-md-2">
            <label for="input_code_postal" class="form-label">Code postal</label>
            <input type="number" name="code_postal_intervenant" class="form-control" id="input_code_postal">
        </div>
        <div class="col-md-4">
            <label for="input_ville" class="form-label">Ville</label>
            <input type="text" name="ville_intervenant" class="form-control" id="input_ville">
        </div>
        <div class="col-md-6">
            <label for="input_fixe" class="form-label">Téléphone fixe</label>
            <input type="text" name="fixe_intervenant" class="form-control" id="input_fixe">
        </div>
        <div class="col-md-6">
            <label for="input_portable" class="form-label">Téléphone portable</label>
            <input type="text" name="portable_intervenant" class="form-control" id="input_portable">
        </div>
        <span class="text-danger" style="font-size:1.2em">Identifiants</span>
        <div class="col-md-6">
            <label for="input_email" class="form-label">Adresse email</label>
            <input type="email" name="email_intervenant" class="form-control" id="input_email">
        </div>
        <div class="col-md-6">
            <label for="input_mdp" class="form-label">Mot de passe</label>
            <input type="password" name="mdp_intervenant" class="form-control" id="input_mdp">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>
</div>
</body>
</html>