<?php 

    // Chemin vers les templates
    $chemin = './templates/';

    // Si la page d'accueil est demandée
    if(isset($_GET['accueil'])){
        require_once($chemin . 'accueil.php');

    // Page de connexion
    } else if(isset($_GET['connexion']) || isset($_GET['connexion_utilisateur']) || isset($_GET['deconnexion']) || isset($_GET['formulaire_inscription_intervenant']) || isset($_GET['formulaire_inscription_eleve']) || isset($_GET['formulaire_inscription_pedagogue'])){
        require_once('controleur_securite.php');
    
    // Gestion des classes
    } else if(isset($_GET['classes']) || isset($_GET['classe']) || isset($_GET['supprimer_classe']) || isset($_GET['formulaire_ajout_classe']) || isset($_GET['ajouter_classe']) || isset($_GET['formulaire_modifier_classe']) || isset($_GET['modifier_classe'])){
        require_once('controleur_classe.php');

    // Gestion des salles
    } else if(isset($_GET['salles']) || isset($_GET['salle']) || isset($_GET['supprimer_salle']) || isset($_GET['formulaire_ajout_salle']) || isset($_GET['ajouter_salle']) || isset($_GET['formulaire_modifier_salle']) || isset($_GET['modifier_salle'])){
        require_once('controleur_salle.php');

    // Gestion des matières
    } else if(isset($_GET['matieres']) || isset($_GET['matiere']) || isset($_GET['supprimer_matiere']) || isset($_GET['formulaire_ajout_matiere']) || isset($_GET['ajouter_matiere']) || isset($_GET['formulaire_modifier_matiere']) || isset($_GET['modifier_matiere'])){
        require_once('controleur_matiere.php');

    // Gestion des intervenants
    } else if(isset($_GET['intervenants']) || isset($_GET['intervenant']) || isset($_GET['supprimer_intervenant']) || isset($_GET['formulaire_ajout_intervenant']) || isset($_GET['ajouter_intervenant']) || isset($_GET['inscription_intervenant']) || isset($_GET['formulaire_modifier_intervenant']) || isset($_GET['modifier_intervenant']) || isset($_GET['page_intervenant']) || isset($_GET['modifier_intervenant_perso'])){
        require_once('controleur_intervenant.php');

    // Gestion des horaires
    } else if(isset($_GET['horaires']) || isset($_GET['horaire']) || isset($_GET['supprimer_horaire']) || isset($_GET['formulaire_ajout_horaire']) || isset($_GET['ajouter_horaire']) || isset($_GET['formulaire_modifier_horaire']) || isset($_GET['modifier_horaire'])){
        require_once('controleur_horaire.php');

    // Gestion des pédagogues
    } else if(isset($_GET['pedagogues']) || isset($_GET['pedagogue']) || isset($_GET['supprimer_pedagogue']) || isset($_GET['formulaire_ajout_pedagogue']) || isset($_GET['ajouter_pedagogue']) || isset($_GET['inscription_pedagogue']) || isset($_GET['formulaire_modifier_pedagogue']) || isset($_GET['modifier_pedagogue']) || isset($_GET['page_pedagogue']) || isset($_GET['modifier_pedagogue_perso'])){
        require_once('controleur_pedagogue.php');

    // Gestion des responsables
    } else if(isset($_GET['responsables']) || isset($_GET['responsable']) || isset($_GET['supprimer_responsable']) || isset($_GET['formulaire_ajout_responsable']) || isset($_GET['ajouter_responsable']) || isset($_GET['formulaire_modifier_responsable']) || isset($_GET['modifier_responsable']) || isset($_GET['page_responsable']) || isset($_GET['modifier_responsable_perso'])){
        require_once('controleur_responsable.php');

    // Gestion des élèves
    } else if(isset($_GET['eleves']) || isset($_GET['eleve']) || isset($_GET['supprimer_eleve']) || isset($_GET['formulaire_ajout_eleve']) || isset($_GET['ajouter_eleve']) || isset($_GET['inscription_eleve']) || isset($_GET['formulaire_modifier_eleve']) || isset($_GET['modifier_eleve']) || isset($_GET['page_eleve']) || isset($_GET['modifier_eleve_perso'])){
        require_once('controleur_eleve.php');
        
    // Gestion des choix élèves
    } else if(isset($_GET['choix_eleves']) || isset($_GET['supprimer_choix_eleve']) || isset($_GET['formulaire_ajout_choix_eleve']) || isset($_GET['ajouter_choix_eleve']) ){
        require_once('controleur_choix_eleve.php');

    // Gestion des plannings
    } else if(isset($_GET['plannings']) || isset($_GET['supprimer_planning']) || isset($_GET['formulaire_ajout_planning']) || isset($_GET['ajouter_planning']) || isset($_GET['calendrier']) || isset($_GET['calendrier_semaine'])){
        require_once('controleur_planning.php');

    // Gestion des admins
    } else if(isset($_GET['formulaire_ajout_secretaire']) || isset($_GET['ajouter_secretaire']) || isset($_GET['secretaire']) || isset($_GET['modifier_secretaire'])){
        require_once('controleur_admin.php');

    // Sinon renvoi vers l'accueil
    } else {
        header('Location: ?accueil');
    }

?>