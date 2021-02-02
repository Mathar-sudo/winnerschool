<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Winner School"/>
    <!-- Titre de page -->
    <title><?= $titre_page ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <!-- Références CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <!-- Scripts JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="jquery-3.5.1.min.js"></script>
</head>
<body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand text-white text-shadow text-uppercase" href="?accueil">Winner School Lyon</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav nav-pills mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if(isset($active_accueil)){ echo 'active'; } ?>" href="?accueil">Accueil</a>
                    </li>
                    <span class="mx-3"></span>
                    <li class="nav-item">
                        <a class="nav-link <?php if(isset($active_espace_membre)){ echo 'active'; } ?>" href="?espace_membre">Espace membre</a>
                    </li>
                    <span class="separateur mx-3"></span>
                    <li class="nav-item">
                        <a class="nav-link <?php if(isset($active_connexion)){ echo 'active'; } ?>" href="?connexion"><i class="fas fa-user"></i> Connexion</a>
                    </li>
                    <span class="mx-1"></span>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if(isset($active_inscription)){ echo 'active'; } ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-plus"></i> Inscription
                        </a>
                        <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?inscription_intervenant"><i class="fas fa-plus"></i> Intervenant</a></li>
                            <li><a class="dropdown-item" href="?inscription_eleve"><i class="fas fa-plus"></i> Elève</a></li>
                            <li><a class="dropdown-item" href="?inscription_pedagogue"><i class="fas fa-plus"></i> Pédagogue</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Fin Menu -->

    <!-- Contenu de la page -->
        <?= $contenu ?>
    <!-- Fin du contenu -->

    <!-- Pied de page -->
    <footer class="sticky-bottom footer bg-primary">
        <div class="container text-center text-white py-4">
            Copyright © 2021 - Winner School Lyon
        </div>
    </footer>
    <!-- Fin Pied de page -->
</body>
</html>