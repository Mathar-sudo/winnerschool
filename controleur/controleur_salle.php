<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_salle = new Use_Salle();

    if(isset($_GET['salles'])){
        $tableau_salles = $use_salle->findAll();
        require_once($chemin . 'salle/index.php');
    } else if(isset($_GET['salle'])){
        $salle = $use_salle->findById($_GET['salle']);
        require_once($chemin . 'salle/show.php');
    } else if(isset($_GET['supprimer_salle'])) {
        $use_salle->supprimer($_GET['supprimer_salle']);
    } else if(isset($_GET['formulaire_ajout_salle'])){
        require_once($chemin . 'salle/ajouter.php');
    } else if(isset($_GET['ajouter_salle'])){
        $use_salle->ajouter();
    }

?>