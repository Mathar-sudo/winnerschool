<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_planning = new Use_planning();
    $use_intervenant = new Use_intervenant();
    $use_eleve = new Use_eleve();
    $use_pedagogue = new Use_pedagogue();
    $use_salle = new Use_salle();
    $use_matiere = new Use_matiere();
    $use_horaire = new Use_Horaire();

    if(isset($_GET['plannings'])){
        $tableau_plannings = $use_planning->findAll();
        require_once($chemin . 'planning/index.php');
    }else if(isset($_GET['supprimer_planning'])){
        $use_planning->supprimer();
    } else if(isset($_GET['formulaire_ajout_planning'])){
        $intervenants = $use_intervenant->findAll();
        $eleves = $use_eleve->findAll();
        $pedagogues = $use_pedagogue->findAll();
        $salles = $use_salle->findAll();
        $matieres = $use_matiere->findAll();
        $horaires = $use_horaire->findAll();
        require_once($chemin . 'planning/ajouter.php');
    } else if(isset($_GET['ajouter_planning'])){
        $use_planning->ajouter();
    }

?>