<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_admin = new Use_Admin();
    $use_horaire = new Use_Horaire();
    $use_classe = new Use_Classe();
    $use_matiere = new Use_Matiere();

    if(isset($_GET['connexion'])){
        require_once($chemin . 'securite/connexion.php');
    } else if(isset($_GET['connexion_utilisateur'])){
        $use_admin->connexion($_POST['email'], $_POST['motdepasse'], $_POST['type_connexion']);
    } else if(isset($_GET['formulaire_inscription_intervenant'])){
        require_once($chemin . 'securite/inscription_intervenant.php');
    } else if(isset($_GET['formulaire_inscription_eleve'])){
        $horaires = $use_horaire->findAll();
        $classes = $use_classe->findAll();
        $matieres = $use_matiere->findAll();
        require_once($chemin . 'securite/inscription_eleve.php');
    } else if(isset($_GET['formulaire_inscription_pedagogue'])){
        require_once($chemin . 'securite/inscription_pedagogue.php');
    } else if(isset($_GET['deconnexion'])){
        session_destroy();
        require_once($chemin . 'securite/connexion.php');
    }

?>