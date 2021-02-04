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

        function ajouter(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            
            $intervenant_planning = $_POST['intervenant_planning'];
            $eleve_planning = $_POST['eleve_planning'];
            $pedagogue_planning = $_POST['pedagogue_planning'];
            $salle_planning = $_POST['salle_planning'];
            $matiere_planning = $_POST['matiere_planning'];
            $horaire_planning = $_POST['horaire_planning'];
            $numero_semaine_planning = trim($_POST['numero_semaine_planning']);
            $annee_planning = trim($_POST['annee_planning']);
            
            // Requête SQL
            $requete = 'SELECT * FROM planning 
            WHERE UPPER(fk_id_intervenant) LIKE UPPER(?)
            AND UPPER(fk_id_eleve) LIKE UPPER(?)
            AND UPPER(fk_id_pedagogue) LIKE UPPER(?)
            AND UPPER(fk_id_salle) LIKE UPPER(?)
            AND UPPER(fk_id_matiere) LIKE UPPER(?)
            AND UPPER(fk_id_horaire) LIKE UPPER(?)
            AND UPPER(numero_semaine) LIKE UPPER(?)
            AND UPPER(annee) LIKE UPPER(?)';
            
            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$intervenant_planning,$eleve_planning,$pedagogue_planning,$salle_planning,$matiere_planning,$horaire_planning,$numero_semaine_planning,$annee_planning])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Ce planning existe déjà</div>';
                    require_once('templates/planning/ajouter.php');
                } else {
                    
                    $requete = 'INSERT INTO planning (fk_id_intervenant,fk_id_eleve,fk_id_pedagogue,fk_id_salle,fk_id_matiere,fk_id_horaire,numero_semaine,annee) VALUES(?,?,?,?,?,?,?,?)';
                    if($bdd->doQuery($requete, [$intervenant_planning,$eleve_planning,$pedagogue_planning,$salle_planning,$matiere_planning,$horaire_planning,$numero_semaine_planning,$annee_planning])){
                        header('Location: ?plannings');
                    } else {
                        return false;
                    }
                }
            }
        }

        function supprimer(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            $id_intervenant=$_POST['id_intervenant'];
            $id_eleve=$_POST['id_eleve'];
            $id_pedagogue=$_POST['id_pedagogue'];
            $id_salle=$_POST['id_salle'];
            $id_matiere=$_POST['id_matiere'];
            $id_horaire=$_POST['id_horaire'];

            // Requête SQL
            $requete = 'DELETE FROM planning WHERE fk_id_intervenant = ? AND fk_id_eleve = ? AND fk_id_pedagogue = ? AND fk_id_salle = ? AND fk_id_matiere = ? AND fk_id_horaire = ?';

            // Exécution de la requête
            $bdd->doQuery($requete, [$id_intervenant,$id_eleve,$id_pedagogue,$id_salle,$id_matiere,$id_horaire]);
        }
    }


?>