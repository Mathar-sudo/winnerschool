<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_intervenant = new Use_Intervenant();

    if(isset($_GET['intervenants'])){
        $tableau_intervenants = $use_intervenant->findAll();
        require_once($chemin . 'intervenant/index.php');
    }else if(isset($_GET['intervenant'])){
        $intervenant = $use_intervenant->findById($_GET['intervenant']);
        require_once($chemin . 'intervenant/show.php');
    }else if(isset($_GET['supprimer_intervenant'])){
        $use_intervenant->supprimer($_GET['supprimer_intervenant']);     
    } else if(isset($_GET['formulaire_ajout_intervenant'])){
        require_once($chemin . 'intervenant/ajouter.php');
    } else if(isset($_GET['ajouter_intervenant'])){
        $use_intervenant->ajouter();
    } else if(isset($_GET['inscription_intervenant'])){
        $use_intervenant->inscription();
    } else if(isset($_GET['formulaire_modifier_intervenant'])){
        $intervenant = $use_intervenant->findById($_GET['formulaire_modifier_intervenant']);
        require_once($chemin . 'intervenant/modifier.php');
    } else if(isset($_GET['modifier_intervenant'])) {
        $use_intervenant->modifier($_GET['modifier_intervenant']);
    } else if(isset($_GET['page_intervenant'])){
        $intervenant = $use_intervenant->findById($_GET['page_intervenant']);
        require_once($chemin . 'intervenant/perso_intervenant.php');
    } else if(isset($_GET['modifier_intervenant_perso'])) {
        $use_intervenant->modifier_perso($_GET['modifier_intervenant_perso']);
    }

?>