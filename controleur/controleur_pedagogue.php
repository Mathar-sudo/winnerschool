<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_pedagogue = new Use_Pedagogue();

    if(isset($_GET['pedagogues'])){
        $tableau_pedagogues = $use_pedagogue->findAll();
        require_once($chemin . 'pedagogue/index.php');
    }

?>