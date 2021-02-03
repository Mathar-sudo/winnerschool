<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Winner School"/>
    <!-- Titre de page -->
    <title>Connexion</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <!-- Références CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <!-- Scripts JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body class="text-center">
    <div style="margin:15% 35%;">
        <?php if(isset($erreur)){ echo $erreur; } ?>
        <form method="POST" action="?connexion_utilisateur">
            <h1 class="text-primary text-uppercase mb-3"><i class="fas fa-chalkboard-teacher"></i> Winner School</h1>
            <input type="text" name="email" class="form-control" placeholder="Adresse email / Login" required>
            <input type="password" name="motdepasse" class="form-control my-3" placeholder="Mot de passe" required>
            <select name="type_connexion" id="type_connexion" class="form-select mb-3" required>
                <option disabled selected value>Quelle est votre connexion ?</option>
                <option value="admin">Administrateur</option>
                <option value="secretaire">Secrétaire</option>
                <option value="intervenant">Intervenant</option>
                <option value="pedagogue">Pédagogue</option>
                <option value="responsable">Responsable</option>
                <option value="eleve">Élève</option>
            </select>
            <button type="submit" name="" class="w-25 btn btn-primary" id="btn_connexion">Se connecter</button>
        </form>
        <div class="my-4"><hr></div>
        <h5>Réaliser des inscriptions</h5>
        <a href="?formulaire_inscription_eleve"><button class="btn btn-warning">Reponsable et élève</button></a>
        <a href="?formulaire_inscription_intervenant"><button class="btn btn-warning mx-3">Intervenant</button></a>
        <a href="?formulaire_inscription_pedagogue"><button class="btn btn-warning">Pédagogue</button></a>
    </div>
    <script>
        $(document).ready(function(){
            $('#type_connexion').change(function(){
                $('#btn_connexion').attr('name', '' + $('#type_connexion option:selected').val() + '');
            });
        });
    </script>
</body>
</html>