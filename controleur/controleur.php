<?php 

    // Chemin vers les templates
    $chemin = './templates/';

    // Si la page d'accueil est demandée
    if(isset($_GET['accueil'])){
        require_once($chemin . 'accueil.php');

    // Page de connexion
    } else if(isset($_GET['connexion']) || isset($_GET['connexion_utilisateur']) || isset($_GET['deconnexion']) || isset($_GET['inscription_intervenant']) || isset($_GET['inscription_eleve']) || isset($_GET['inscription_pedagogue'])){
        require_once('controleur_securite.php');
    
    // Gestion des classes
    } else if(isset($_GET['classes']) || isset($_GET['classe']) || isset($_GET['supprimer_classe'])){
        require_once('controleur_classe.php');

    // Gestion des salles
    } else if(isset($_GET['salles']) || isset($_GET['salle']) || isset($_GET['supprimer_salle'])){
        require_once('controleur_salle.php');

    // Gestion des matières
    } else if(isset($_GET['matieres']) || isset($_GET['matiere']) || isset($_GET['supprimer_matiere'])){
        require_once('controleur_matiere.php');

    // Gestion des intervenants
    } else if(isset($_GET['intervenants']) || isset($_GET['intervenant']) || isset($_GET['supprimer_intervenant'])){
        require_once('controleur_intervenant.php');

    // Gestion des horaires
    } else if(isset($_GET['horaires']) || isset($_GET['horaire']) || isset($_GET['supprimer_horaire'])){
        require_once('controleur_horaire.php');

    // Gestion des pédagogues
    } else if(isset($_GET['pedagogues']) || isset($_GET['pedagogue']) || isset($_GET['supprimer_pedagogue'])){
        require_once('controleur_pedagogue.php');

    // Gestion des responsables
    } else if(isset($_GET['responsables']) || isset($_GET['responsable']) || isset($_GET['supprimer_responsable'])){
        require_once('controleur_responsable.php');

    // Gestion des élèves
    } else if(isset($_GET['eleves']) || isset($_GET['eleve']) || isset($_GET['supprimer_eleve'])){
        require_once('controleur_eleve.php');
<<<<<<< HEAD
    // Gestion des choix élèves
=======
    
    //Gestion choix élève
>>>>>>> 08efcb5af0508ff451098dcb91bc0fac4fdebc23
    } else if(isset($_GET['choix_eleves']) || isset($_GET['supprimer_choix_eleve'])){
        require_once('controleur_choix_eleve.php');

    // Gestion des plannings
<<<<<<< HEAD
    } else if(isset($_GET['plannings']) || isset($_GET['supprimer_planning'])){
=======
    } else if(isset($_GET['plannings'])  || isset($_GET['supprimer_planning'])){
>>>>>>> 08efcb5af0508ff451098dcb91bc0fac4fdebc23
        require_once('controleur_planning.php');

    // Sinon renvoi vers l'accueil
    } else {
        header('Location: ?accueil');
    }

?>