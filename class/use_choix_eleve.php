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
        function supprimer(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            $id_eleve=$_POST['id_eleve'];
            $id_matiere=$_POST['id_matiere'];
            $id_horaire=$_POST['id_horaire'];

            // Requête SQL
            $requete = 'DELETE FROM choix_eleve WHERE fk_id_eleve=? AND fk_id_matiere=? AND fk_id_horaire=?';

            // Exécution de la requête
            $bdd->doQuery($requete, [$id_eleve,$id_matiere,$id_horaire]);
            
        }

    }

?>