<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_matiere = new Use_Matiere();

    if(isset($_GET['matieres'])){
        $tableau_matieres = $use_matiere->findAll();
        require_once($chemin . 'matiere/index.php');
    }else if(isset($_GET['matiere'])){
        $matiere = $use_matiere->findById($_GET['matiere']);
        require_once($chemin . 'matiere/show.php');
    }

?>