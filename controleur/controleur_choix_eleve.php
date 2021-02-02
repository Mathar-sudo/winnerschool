<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_choix_eleve = new Use_Choix_Eleve();

    if(isset($_GET['choix_eleves'])){
        $tableau_choix_eleves = $use_choix_eleve->findAll();
        require_once($chemin . 'choix_eleve/index.php');
    }

?>