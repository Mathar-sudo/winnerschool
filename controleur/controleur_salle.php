<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_salle = new Use_Salle();

    //Afficher Salles
    if(isset($_GET['salles'])){
        $tableau_salles = $use_salle->findAll();
        require_once($chemin . 'salle/index.php');
    }

?>