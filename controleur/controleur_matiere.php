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
    }else if(isset($_GET['supprimer_matiere'])) {
        $use_matiere->supprimer($_GET['supprimer_matiere']);
    }else if(isset($_GET['formulaire_ajout_matiere'])){
        require_once($chemin . 'matiere/ajouter.php');
    } else if(isset($_GET['ajouter_matiere'])){
        $use_matiere->ajouter();
    }

?>