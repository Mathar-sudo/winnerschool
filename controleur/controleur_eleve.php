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
<<<<<<< HEAD
    } else if(isset($_GET['formulaire_modifier_eleve'])){
        $eleve = $use_eleve->findById($_GET['formulaire_modifier_eleve']);
=======
<<<<<<< HEAD
    }else if(isset($_GET['formulaire_modifier_eleve'])){
        $eleve = $use_eleve->findById($_GET['formulaire_modifier_eleve']);
        $responsables = $use_responsable->findAll();
        $classes = $use_classe->findAll();
=======
    } else if(isset($_GET['formulaire_modifier_eleve'])){
        $eleve = $use_eleve->findById($_GET['formulaire_modifier_eleve']);
>>>>>>> cd6f458f127972c41e2f55eb2e99c5d58e58ae8c
>>>>>>> a500492ae028dc29bef08bbd8bfec31bd433b23c
        require_once($chemin . 'eleve/modifier.php');
    } else if(isset($_GET['modifier_eleve'])) {
        $use_eleve->modifier($_GET['modifier_eleve']);
    }

?>