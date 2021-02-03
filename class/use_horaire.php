<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Horaire {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM horaire';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($horaires_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($horaires_recup as $horaire){
                        $horaires[] = new horaire($horaire);
                    }
                    // On retourne le tableau
                    return $horaires;
                } else {
                    return false;
                }
            }
        }
        function findById($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM horaire WHERE id_horaire = ?';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
                // Récupération des résultats
                if($horaire_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($horaire_recup as $horaire){
                        $horaire[] = new Horaire($horaire);
                    }
                    // On retourne le tableau
                    return $horaire[0];
                } else {
                    return false;
                }
            }
        }
    }

?>