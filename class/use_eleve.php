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

        /**
         * Inscription responsable + élève en même temps
         */
        function inscription(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            // Champs responsable
            $nom_responsable = trim($_POST['nom_responsable']);
            $prenom_responsable = trim($_POST['prenom_responsable']);
            $adresse_responsable = trim($_POST['adresse_responsable']);
            $code_postal_responsable = trim($_POST['code_postal_responsable']);
            $ville_responsable = trim($_POST['ville_responsable']);
            $fixe_responsable = trim($_POST['fixe_responsable']);
            $portable_responsable = trim($_POST['portable_responsable']);
            $email_responsable = trim($_POST['email_responsable']);
            $mdp_responsable = trim($_POST['mdp_responsable']);
            // Champs élève
            $nom_eleve = trim($_POST['nom_eleve']);
            $prenom_eleve = trim($_POST['prenom_eleve']);
            $age_eleve = trim($_POST['age_eleve']);
            $classe_eleve = trim($_POST['classe_eleve']);
            $etablissement_eleve = trim($_POST['etablissement_eleve']);
            $portable_eleve = trim($_POST['portable_eleve']);
            $particularite_eleve = trim($_POST['particularite_eleve']);
            $email_eleve = trim($_POST['email_eleve']);
            $mdp_eleve = trim($_POST['mdp_eleve']);
            // Champ horaires souhaités par l'élève
            $horaires = $_POST['horaires'];

            // Récupérer dernier id élève
            $requete = 'SELECT id_eleve FROM eleve ORDER BY id_eleve DESC LIMIT 0,1';
            $bdd->doQuery($requete, []);
            $last_id = $bdd->tabResultat;
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