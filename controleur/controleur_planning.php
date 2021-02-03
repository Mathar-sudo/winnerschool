<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_planning = new Use_planning();

    if(isset($_GET['plannings'])){
        $tableau_plannings = $use_planning->findAll();
        require_once($chemin . 'planning/index.php');
    }else if(isset($_GET['supprimer_planning'])){
        $use_planning->supprimer();
    }

?>