<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Eleve {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM eleve';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($eleves_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($eleves_recup as $eleve){
                        $eleves[] = new Eleve($eleve);
                    }
                    // On retourne le tableau
                    return $eleves;
                } else {
                    return false;
                }
            }
        }
        function findById($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM eleve WHERE id_eleve = ?';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
                // Récupération des résultats
                if($eleve_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($eleve_recup as $eleve){
                        $eleve[] = new Eleve($eleve);
                    }
                    // On retourne le tableau
                    return $eleve[0];
                } else {
                    return false;
                }
            }
        }

        function supprimer($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'DELETE FROM eleve WHERE id_eleve = ?';

            // Exécution de la requête
            $bdd->doQuery($requete, [$id]);
        }
    }

?>