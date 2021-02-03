<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Salle {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM salle';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($salles_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($salles_recup as $salle){
                        $salles[] = new Salle($salle);
                    }
                    // On retourne le tableau
                    return $salles;
                } else {
                    return false;
                }
            }
        }

        function findById($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM salle WHERE id_salle = ?';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
                // Récupération des résultats
                if($salle_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($salle_recup as $salle){
                        $salle[] = new Salle($salle);
                    }
                    // On retourne le tableau
                    return $salle[0];
                } else {
                    return false;
                }
            }
        }

        function supprimer($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            $requete = 'DELETE FROM planning WHERE fk_id_salle = ?';
            $bdd->doQuery($requete, [$id]);

            // Requête SQL
            $requete = 'DELETE FROM salle WHERE id_salle = ?';
            // Exécution de la requête
            $bdd->doQuery($requete, [$id]);

        }
    }

?>