<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_choix_eleve = new Use_Choix_Eleve();
    $use_horaire = new Use_Horaire();
    $use_eleve = new Use_Eleve();
    $use_matiere = new Use_Matiere();

    if(isset($_GET['choix_eleves'])){
        $tableau_choix_eleves = $use_choix_eleve->findAll();
        require_once($chemin . 'choix_eleve/index.php');
    } else if(isset($_GET['supprimer_choix_eleve'])){
        $use_choix_eleve->supprimer();
    }else if(isset($_GET['formulaire_ajout_choix_eleve'])){
        $horaires= $use_horaire->findAll();
        $eleves= $use_eleve->findAll();
        $matieres= $use_matiere->findAll();
        require_once($chemin . 'choix_eleve/ajouter.php');
    } else if(isset($_GET['ajouter_choix_eleve'])){
        $use_choix_eleve->ajouter();
    }

?>