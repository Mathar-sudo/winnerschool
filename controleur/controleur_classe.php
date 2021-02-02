<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Chemin vers les templates
    $chemin = './templates/';

    $use_classe = new Use_Classe();

    if(isset($_GET['classes'])){
        $tableau_classes = $use_classe->findAll();
        require_once($chemin . 'classe/index.php');
    }

?>