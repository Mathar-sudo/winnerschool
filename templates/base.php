<?php 

    if(!empty($_SESSION)){

?>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
                    <span class="mx-1"></span>
                    <!-- MENU POUR SECRETAIRE ET PEDAGOGUE -->
                    <?php if(isset($_SESSION['secretaire']) || isset($_SESSION['pedagogue'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_intervenants)){ echo 'active'; } ?>" href="?intervenants">Intervenants</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_eleves)){ echo 'active'; } ?>" href="?eleves">Élèves</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_pedagogues)){ echo 'active'; } ?>" href="?pedagogues">Pédagogues</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_plannings)){ echo 'active'; } ?>" href="?plannings">Planning</a>
                        </li>
                    <?php } else if(isset($_SESSION['intervenant'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_intervenants)){ echo 'active'; } ?>" href="?intervenants">Intervenants</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_pedagogues)){ echo 'active'; } ?>" href="?pedagogues">Pédagogues</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_plannings)){ echo 'active'; } ?>" href="?plannings">Planning</a>
                        </li>
                    <?php } else if(isset($_SESSION['responsable'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_responsables)){ echo 'active'; } ?>" href="?responsables">Responsables</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_plannings)){ echo 'active'; } ?>" href="?plannings">Planning</a>
                        </li>
                    <?php } else if(isset($_SESSION['eleve'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_eleves)){ echo 'active'; } ?>" href="?eleves">Élèves</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_plannings)){ echo 'active'; } ?>" href="?plannings">Planning</a>
                        </li>
                    <?php } else if(isset($_SESSION['admin'])) { ?>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_intervenants)){ echo 'active'; } ?>" href="?intervenants">Intervenants</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_responsables)){ echo 'active'; } ?>" href="?responsables">Responsables</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_pedagogues)){ echo 'active'; } ?>" href="?pedagogues">Pédagogues</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_eleves)){ echo 'active'; } ?>" href="?eleves">Élèves</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php if(isset($active_plannings)){ echo 'active'; } ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Planning
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="?calendrier">Calendrier</a></li>
                                <li><a class="dropdown-item" href="?plannings">Planning complet</a></li>
                            </ul>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_classes)){ echo 'active'; } ?>" href="?classes">Classes</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_salles)){ echo 'active'; } ?>" href="?salles">Salles</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_matieres)){ echo 'active'; } ?>" href="?matieres">Matières</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_horaires)){ echo 'active'; } ?>" href="?horaires">Horaires</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link <?php if(isset($active_choix_eleves)){ echo 'active'; } ?>" href="?choix_eleves">Choix Elèves</a>
                        </li>
                        <span class="mx-1"></span>
                        <li class="nav-item">
                            <a class="nav-link" href="?formulaire_ajout_secretaire">+ Secrétaire</a>
                        </li>
                    <?php } ?>
                    <span class="separateur mx-1"></span>
                    <?php if(isset($_SESSION['admin'])){ ?>
                    <li class="nav-item">
                        <a class="nav-link2" style="border:1px solid #E0FEB1;color:#E0FEB1"><i class="fas fa-user"></i> <?= $_SESSION['admin'] ?></a>
                    </li>
                    <?php } else if(isset($_SESSION['secretaire'])){ ?>
                    <li class="nav-item">
                        <a class="nav-link2" href="?secretaire=<?= $_SESSION['id_secretaire'] ?>" style="border:1px solid #FEB1B1;color:#FEB1B1"><i class="fas fa-user"></i> <?= $_SESSION['secretaire'] ?></a>
                    </li>
                    <?php } else if(isset($_SESSION['intervenant'])){ ?>
                    <li class="nav-item">
                        <a class="nav-link2" href="?page_intervenant=<?= $_SESSION['id_intervenant'] ?>" style="border:1px solid #B2B1FE;color:#B2B1FE"><i class="fas fa-user"></i> <?= $_SESSION['intervenant'] ?></a>
                    </li>
                    <?php } else if(isset($_SESSION['eleve'])){ ?>
                    <li class="nav-item">
                        <a class="nav-link2" href="?page_eleve=<?= $_SESSION['id_eleve'] ?>" style="border:1px solid #94F7F2;color:#94F7F2"><i class="fas fa-user"></i> <?= $_SESSION['eleve'] ?></a>
                    </li>
                    <?php } else if(isset($_SESSION['pedagogue'])){ ?>
                    <li class="nav-item">
                        <a class="nav-link2" href="?page_pedagogue=<?= $_SESSION['id_pedagogue'] ?>" style="border:1px solid #FFF1D4;color:#FFF1D4"><i class="fas fa-user"></i> <?= $_SESSION['pedagogue'] ?></a>
                    </li>
                    <?php } else if(isset($_SESSION['responsable'])){ ?>
                    <li class="nav-item">
                        <a class="nav-link2" href="?page_responsable=<?= $_SESSION['id_responsable'] ?>" style="border:1px solid #0DC923;color:#0DC923"><i class="fas fa-user"></i> <?= $_SESSION['responsable'] ?></a>
                    </li>
                    <?php } ?>
                    <span class="mx-1"></span>
                    <li class="nav-item">
                        <a class="nav-link" href="?deconnexion"><i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Fin Menu -->

    <!-- Contenu de la page -->
    <div class="mt-5"></div>
        <?= $contenu ?>
    <!-- Fin du contenu -->

    <!-- Pied de page -->
    <footer class="bg-primary">
        <div class="container text-center text-white py-4">
            Copyright © 2021 - Winner School Lyon
        </div>
    </footer>
    <!-- Fin Pied de page -->
</body>
</html>

<?php 

    } else {
        $erreur = '<div class="alert alert-warning mb-3">Vous devez être connecté pour accéder à cette page</div>';
        require_once('templates/securite/connexion.php');
    }

?>