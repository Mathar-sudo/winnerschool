<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Choix_Eleve {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM choix_eleve';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($choix_eleves_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($choix_eleves_recup as $choix_eleve){
                        $choix_eleves[] = new Choix_Eleve($choix_eleve);
                    }
                    // On retourne le tableau
                    return $choix_eleves;
                } else {
                    return false;
                }
            }
        }

    }

?>