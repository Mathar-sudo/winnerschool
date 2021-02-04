<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_admin = new Use_Admin();

    if(isset($_GET['formulaire_ajout_secretaire'])){
        require_once($chemin . 'admin/ajouter_secretaire.php');
    }  else if(isset($_GET['ajouter_secretaire'])){
        $use_admin->ajouter_secretaire();
    } else if(isset($_GET['secretaire'])){
        $admin = $use_admin->findById($_GET['secretaire']);
        require_once($chemin . 'admin/show_secretaire.php');
    } else if(isset($_GET['modifier_secretaire'])){
        $use_admin->modifier($_GET['modifier_secretaire']);
    }

?>