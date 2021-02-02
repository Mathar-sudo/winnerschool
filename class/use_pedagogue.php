<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Pedagogue {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM pedagogue';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($pedagogues_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($pedagogues_recup as $pedagogue){
                        $pedagogues[] = new Pedagogue($pedagogue);
                    }
                    // On retourne le tableau
                    return $pedagogues;
                } else {
                    return false;
                }
            }
        }

    }

?>