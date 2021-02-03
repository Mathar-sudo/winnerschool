<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Responsable {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM responsable';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($responsables_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($responsables_recup as $responsable){
                        $responsables[] = new Responsable($responsable);
                    }
                    // On retourne le tableau
                    return $responsables;
                } else {
                    return false;
                }
            }
        }

        function findById($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM responsable WHERE id_responsable =?';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
                // Récupération des résultats
                if($responsable_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($responsable_recup as $responsable){
                        $responsable[] = new Responsable($responsable);
                    }
                    // On retourne le tableau
                    return $responsable[0];
                } else {
                    return false;
                }
            }
        }

        function supprimer($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'DELETE FROM responsable WHERE id_responsable = ?';

            // Exécution de la requête
            $bdd->doQuery($requete, [$id]);
        }


    }

?>