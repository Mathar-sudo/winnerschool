<?php

$emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Planning {

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
                        $plannings[] = new Planning($planning);
                    }
                    // On retourne le tableau
                    return $plannings;
                } else {
                    return false;
                }
            }
        }

        function supprimer($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            $id_intervenant=$_POST['id_intervenant'];
            $id_eleve=$_POST['id_eleve'];
            $id_pedagogue=$_POST['id_pedagogue'];
            $id_salle=$_POST['id_salle'];
            $id_matiere=$_POST['id_matiere'];
            $numero_semaine=$_POST['numero_semaine'];
            $annee=$_POST['annee'];

            // Requête SQL
            $requete = 'DELETE FROM planning WHERE fk_id_intervenant = ? AND fk_id_eleve = ? AND fk_id_pedagogue = ? AND fk_id_salle = ? AND fk_id_matiere = ? AND numero_semaine = ? AND annee = ?';

            // Exécution de la requête
            $bdd->doQuery($requete, [$id_intervenant,$id_eleve,$id_pedagogue,$id_salle,$id_matiere,$numero_semaine,$annee]);
        }
    }


?>