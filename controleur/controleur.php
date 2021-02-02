<?php 

    // Chemin vers les templates
    $chemin = './templates/';

    // Si la page d'accueil est demandée
    if(isset($_GET['accueil'])){
        require_once($chemin . 'accueil.php');

    // Page de connexion
    } else if(isset($_GET['connexion']) || isset($_GET['inscription_intervenant']) || isset($_GET['inscription_eleve']) || isset($_GET['inscription_pedagogue'])){
        require_once('controleur_securite.php');

    // Espace membre
    } else if(isset($_GET['espace_membre'])){
        require_once($chemin . 'espace_membre.php');

    // Sinon renvoi vers l'accueil
    } else {
        header('Location: ?accueil');
    }

?>