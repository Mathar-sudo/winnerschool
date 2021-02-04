<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_horaire = new Use_Horaire();

    if(isset($_GET['horaires'])){
        $tableau_horaires = $use_horaire->findAll();
        require_once($chemin . 'horaire/index.php');
    }else if(isset($_GET['horaire'])){
        $horaire = $use_horaire->findById($_GET['horaire']);
        require_once($chemin . 'horaire/show.php');
    }else if(isset($_GET['supprimer_horaire'])){
        $use_horaire->supprimer($_GET['supprimer_horaire']); 
    }else if(isset($_GET['formulaire_ajout_horaire'])){
        require_once($chemin . 'horaire/ajouter.php');
    } else if(isset($_GET['ajouter_horaire'])){
        $use_horaire->ajouter();
    }


?>