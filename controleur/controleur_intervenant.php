<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_intervenant = new Use_Intervenant();

    if(isset($_GET['intervenants'])){
        $tableau_intervenants = $use_intervenant->findAll();
        require_once($chemin . 'intervenant/index.php');
    }else if(isset($_GET['intervenant'])){
        $intervenant = $use_intervenant->findById($_GET['intervenant']);
        require_once($chemin . 'intervenant/show.php');
    }

?>