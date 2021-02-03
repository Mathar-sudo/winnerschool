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
    }

?>