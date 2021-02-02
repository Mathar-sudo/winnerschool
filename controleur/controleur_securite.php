<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    if(isset($_GET['connexion'])){
        require_once($chemin . 'securite/connexion.php');
    } else if(isset($_GET['inscription_intervenant'])){
        require_once($chemin . 'securite/inscription_intervenant.php');
    } else if(isset($_GET['inscription_eleve'])){
        require_once($chemin . 'securite/inscription_eleve.php');
    } else if(isset($_GET['inscription_pedagogue'])){
        require_once($chemin . 'securite/inscription_pedagogue.php');
    }

?>