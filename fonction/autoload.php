<?php 

/**
 * fonction/autoload.php
 * 
 * Permet de charger automatiquement les classes $class lors de l'appel d'un objet si non chargées
 * 
 */

// On charge la fonction si elle n'existe pas
if(!function_exists('charger_class')){

    // Fonction permettant de charger automatiquement les classes $class lors de l'appel d'un objet si non chargées
    function charger_class($class){

        if(!class_exists($class)){

            $fileClass = dirname(__FILE__) . '/../class/' . strtolower($class) . '.php';
            if(file_exists($fileClass)){
                require $fileClass;
            }

        }

    }

}

spl_autoload_register('charger_class');

?>