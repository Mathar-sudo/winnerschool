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
<<<<<<< HEAD
    }  else if(isset($_GET['formulaire_ajout_eleve'])){
        $responsable = $use_responsable->findAll();
        $classe= $use_classe->findAll();
        require_once($chemin . 'eleve/ajouter.php');
    } else if(isset($_GET['ajouter_eleve'])){
        $use_eleve->ajouter();
    } else if(isset($_GET['formulaire_modifier_eleve'])){
        $eleve = $use_eleve->findById($_GET['formulaire_modifier_eleve']);
=======
    }else if(isset($_GET['formulaire_modifier_eleve'])){
        $eleve = $use_eleve->findById($_GET['formulaire_modifier_eleve']);
        $responsables = $use_responsable->findAll();
        $classes = $use_classe->findAll();
>>>>>>> cabed393cd235ff56baec1f26f494e8e51b02be6
        require_once($chemin . 'eleve/modifier.php');
    } else if(isset($_GET['modifier_eleve'])) {
        $use_eleve->modifier($_GET['modifier_eleve']);
    }

?>