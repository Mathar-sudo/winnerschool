<?php

$emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_planning {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM planning';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($plannings_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($plannings_recup as $planning){
                        $plannings[] = new planning($planning);
                    }
                    // On retourne le tableau
                    return $intervenants;
                } else {
                    return false;
                }
            }
        }

    }



?>