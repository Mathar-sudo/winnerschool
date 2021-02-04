<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_responsable = new Use_Responsable();

    //Afficher élèves
    if(isset($_GET['responsables'])){
        $tableau_responsables = $use_responsable->findAll();
        require_once($chemin . 'responsable/index.php');
    } else if(isset($_GET['responsable'])){
        $responsable = $use_responsable->findById($_GET['responsable']);
        require_once($chemin . 'responsable/show.php');
    } else if(isset($_GET['supprimer_responsable'])){
        $use_responsable->supprimer($_GET['supprimer_responsable']);
    } else if(isset($_GET['formulaire_ajout_responsable'])){
        require_once($chemin . 'responsable/ajouter.php');
    } else if(isset($_GET['ajouter_responsable'])){
        $use_responsable->ajouter();
    } else if(isset($_GET['formulaire_modifier_responsable'])){
        $responsable = $use_responsable->findById($_GET['formulaire_modifier_responsable']);
        require_once($chemin . 'responsable/modifier.php');
    } else if(isset($_GET['modifier_responsable'])) {
        $use_responsable->modifier($_GET['modifier_responsable']);
    }


?>