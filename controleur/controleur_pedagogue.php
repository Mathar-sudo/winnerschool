<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_pedagogue = new Use_Pedagogue();

    if(isset($_GET['pedagogues'])){
        $tableau_pedagogues = $use_pedagogue->findAll();
        require_once($chemin . 'pedagogue/index.php');
    }else if(isset($_GET['pedagogue'])){
        $pedagogue = $use_pedagogue->findById($_GET['pedagogue']);
        require_once($chemin . 'pedagogue/show.php');
    }else if (isset($_GET['supprimer_pedagogue'])){
        $use_pedagogue->supprimer($_GET['supprimer_pedagogue']);
    }else if(isset($_GET['formulaire_ajout_pedagogue'])){
        require_once($chemin . 'pedagogue/ajouter.php');
    } else if(isset($_GET['ajouter_pedagogue'])){
        $use_pedagogue->ajouter();
    } else if(isset($_GET['inscription_pedagogue'])){
        $use_pedagogue->inscription();
    }else if(isset($_GET['formulaire_modifier_pedagogue'])){
        $pedagogue = $use_pedagogue->findById($_GET['formulaire_modifier_pedagogue']);
        require_once($chemin . 'pedagogue/modifier.php');
    } else if(isset($_GET['modifier_pedagogue'])) {
        $use_pedagogue->modifier($_GET['modifier_pedagogue']);
    } else if(isset($_GET['page_pedagogue'])){
        $pedagogue = $use_pedagogue->findById($_GET['page_pedagogue']);
        require_once($chemin . 'pedagogue/perso_pedagogue.php');
    } else if(isset($_GET['modifier_pedagogue_perso'])){
        $use_pedagogue->modifier_perso($_GET['modifier_pedagogue_perso']);
    }

?>