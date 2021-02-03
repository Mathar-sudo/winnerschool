<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_admin = new Use_Admin();

    if(isset($_GET['connexion'])){
        require_once($chemin . 'securite/connexion.php');
    } else if(isset($_GET['connexion_utilisateur'])){
        $use_admin->connexion($_POST['email'], $_POST['motdepasse'], $_POST['type_connexion']);
    } else if(isset($_GET['inscription_intervenant'])){
        require_once($chemin . 'securite/inscription_intervenant.php');
    } else if(isset($_GET['inscription_eleve'])){
        require_once($chemin . 'securite/inscription_eleve.php');
    } else if(isset($_GET['inscription_pedagogue'])){
        require_once($chemin . 'securite/inscription_pedagogue.php');
    } else if(isset($_GET['deconnexion'])){
        session_destroy();
        require_once($chemin . 'securite/connexion.php');
    }

?>