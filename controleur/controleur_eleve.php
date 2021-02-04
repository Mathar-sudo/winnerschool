<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_eleve = new Use_Eleve();
    $use_responsable = new Use_Responsable();
    $use_classe = new Use_Classe();

    //Afficher élèves
    if(isset($_GET['eleves'])){
        $tableau_eleves = $use_eleve->findAll();
        require_once($chemin . 'eleve/index.php');
    } else if(isset($_GET['eleve'])){
        $eleve = $use_eleve->findById($_GET['eleve']);
        require_once($chemin . 'eleve/show.php');
    } else if(isset($_GET['supprimer_eleve'])){
        $use_eleve->supprimer($_GET['supprimer_eleve']);
    } else if(isset($_GET['inscription_eleve'])){
        $use_eleve->inscription();
    }  else if(isset($_GET['formulaire_ajout_eleve'])){
        $classes = $use_classe->findAll();
        $responsables = $use_responsable->findAll();
        require_once($chemin . 'eleve/ajouter.php');
    } else if(isset($_GET['ajouter_eleve'])){
        $use_eleve->ajouter();
    } else if(isset($_GET['formulaire_modifier_eleve'])){
        $eleve = $use_eleve->findById($_GET['formulaire_modifier_eleve']);
<<<<<<< HEAD
=======
        $classes = $use_classe->findAll();
        $responsables = $use_responsable->findAll();
>>>>>>> e4d5a8802a6f7565d4ddc385f64abc8cfc8cbcb6
        require_once($chemin . 'eleve/modifier.php');
    } else if(isset($_GET['modifier_eleve'])) {
        $use_eleve->modifier($_GET['modifier_eleve']);
    }

?>