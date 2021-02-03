<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_classe = new Use_Classe();

    if(isset($_GET['classes'])){
        $tableau_classes = $use_classe->findAll();
        require_once($chemin . 'classe/index.php');
    } else if(isset($_GET['classe'])){
        $classe = $use_classe->findById($_GET['classe']);
        require_once($chemin . 'classe/show.php');
    } else if(isset($_GET['supprimer_classe'])){
        $use_classe->supprimer($_GET['supprimer_classe']);
    } else if(isset($_GET['formulaire_ajout_classe'])){
        require_once($chemin . 'classe/ajouter.php');
    } else if(isset($_GET['ajouter_classe'])){
        $use_classe->ajouter();
    }

?>