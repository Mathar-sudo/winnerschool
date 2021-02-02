<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_eleve = new Use_Eleve();

    //Afficher élèves
    if(isset($_GET['eleves'])){
        $tableau_eleves = $use_eleve->findAll();
        require_once($chemin . 'eleve/index.php');
    }

?>