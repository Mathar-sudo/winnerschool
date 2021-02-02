<?php 

    // Chemin vers les templates
    $chemin = './templates/';

    // Si la page d'accueil est demandée
    if(isset($_GET['accueil'])){
        require_once($chemin . 'accueil.php');

    // Page de connexion
    } else if(isset($_GET['connexion']) || isset($_GET['inscription_intervenant']) || isset($_GET['inscription_eleve']) || isset($_GET['inscription_pedagogue'])){
        require_once('controleur_securite.php');
    
    // Gestion des classes
    } else if(isset($_GET['classes'])){
        require_once('controleur_classe.php');

    // Gestion des salles
    } else if(isset($_GET['salles'])){
        require_once('controleur_salle.php');

    // Gestion des matières
    } else if(isset($_GET['matieres'])){
        require_once('controleur_matiere.php');

    // Gestion des intervenants
    } else if(isset($_GET['intervenants'])){
        require_once('controleur_intervenant.php');

    // Gestion des horaires
    } else if(isset($_GET['horaires'])){
        require_once('');

    // Gestion des pédagogues
    } else if(isset($_GET['pedagogues'])){
        require_once('');

    // Gestion des élèves
    } else if(isset($_GET['eleves'])){
        require_once('controleur_eleve.php');

    // Espace membre
    } else if(isset($_GET['espace_membre'])){
        require_once($chemin . 'espace_membre.php');

    // Sinon renvoi vers l'accueil
    } else {
        header('Location: ?accueil');
    }

?>