<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Winner School"/>
    <!-- Titre de page -->
    <title>Inscription d'un pédagogue</title>
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
    <h1 class="text-primary">Inscription d'un pédagogue</h1>
    <hr style="width:15%">
    <?php if(isset($erreur)){ echo $erreur; } ?>
    <form class="row g-3 w-25" method="POST" action="?inscription_pedagogue">
        <div class="col-12">
            <label for="input_nom" class="form-label">Nom du pédagogue</label>
            <input type="text" name="nom_pedagogue" class="form-control" id="input_nom" required>
            <label for="input_prenom" class="form-label">Prénom du pédagogue</label>
            <input type="text" name="prenom_pedagogue" class="form-control" id="input_prenom" required>
            <label for="input_mail" class="form-label">Mail du pédagogue</label>
            <input type="email" name="mail_pedagogue" class="form-control" id="input_mail" required>
            <label for="input_mobile" class="form-label">Mobile du pédagogue</label>
            <input type="text" name="mobile_pedagogue" class="form-control" id="input_mobile" required>
            <label for="input_mdp" class="form-label">Mot de passe du pédagogue</label>
            <input type="password" value="winnerschool" name="mdp_pedagogue" class="form-control" id="input_mdp" readonly>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Inscription</button>
        </div>
    </form>
</div>
</body>
</html>