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
    }

?>