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
        function ajouter(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            
            $nom_eleve = trim($_POST['nom_eleve']);
            $prenom_eleve = trim($_POST['prenom_eleve']);
            $age_eleve = trim($_POST['age_eleve']);
            $mobile_eleve = trim($_POST['mobile_eleve']);
            $mail_eleve = trim($_POST['mail_eleve']);
            $etablissement_eleve = trim($_POST['etablissement_eleve']);
            $particularite_eleve = trim($_POST['particularite_eleve']);
            $mdp_eleve = password_hash(trim($_POST['mdp_eleve']), PASSWORD_DEFAULT);
            $responsable_eleve = $_POST['responsable_eleve'];
            $classe_eleve = $_POST['classe_eleve'];
            
            // Requête SQL
            $requete = 'SELECT * FROM eleve WHERE UPPER(mail_eleve) LIKE UPPER(?)';

            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$mail_eleve])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Ce eleve existe déjà</div>';
                    require_once('templates/eleve/ajouter.php');
                } else {
    
                    $requete = 'INSERT INTO eleve (prenom_eleve,nom_eleve,age_eleve,mobile_eleve,mail_eleve,etablissement_eleve,particularite_eleve,mdp_eleve,fk_id_responsable,fk_id_classe) VALUES(?,?,?,?,?,?,?,?,?,?)';
                    if($bdd->doQuery($requete, [$prenom_eleve,$nom_eleve,$age_eleve,$mobile_eleve,$mail_eleve,$etablissement_eleve,$particularite_eleve,$mdp_eleve,$responsable_eleve,$classe_eleve])){
                        header('Location: ?eleves');
                    } else {
                        return false;
                    }
                }
            }
        }


        function modifier($id_eleve){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            
            $nom_eleve = trim($_POST['nom_eleve']);
            $prenom_eleve = trim($_POST['prenom_eleve']);
            $age_eleve = trim($_POST['age_eleve']);
            $mobile_eleve = trim($_POST['mobile_eleve']);
            $mail_eleve = trim($_POST['mail_eleve']);
            $etablissement_eleve = trim($_POST['etablissement_eleve']);
            $particularite_eleve = trim($_POST['particularite_eleve']);
            $mdp_eleve = password_hash(trim($_POST['mdp_eleve']), PASSWORD_DEFAULT);
            $responsable_eleve = $_POST['responsable_eleve'];
            $classe_eleve = $_POST['classe_eleve'];
            
            // Requête SQL
            $requete = 'UPDATE eleve SET prenom_eleve = ?,nom_eleve = ?,age_eleve = ?,mobile_eleve = ?,mail_eleve = ?,etablissement_eleve = ?,particularite_eleve = ?,mdp_eleve = ?,fk_id_responsable = ?,fk_id_classe = ? WHERE id_eleve = ?';
                    
            if($bdd->doQuery($requete, [$prenom_eleve,$nom_eleve,$age_eleve,$mobile_eleve,$mail_eleve,$etablissement_eleve,$particularite_eleve,$mdp_eleve,$responsable_eleve,$classe_eleve, $id_eleve])){
                header('Location: ?eleves');
            } else {
                return false;
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
            $cdp_responsable = trim($_POST['code_postal_responsable']);
            $ville_responsable = trim($_POST['ville_responsable']);
            $fixe_responsable = trim($_POST['fixe_responsable']);
            $mobile_responsable = trim($_POST['portable_responsable']);
            $email_responsable = trim($_POST['email_responsable']);
            $mdp_responsable = password_hash(trim($_POST['mdp_responsable']), PASSWORD_DEFAULT);
            // Champs élève
            $nom_eleve = trim($_POST['nom_eleve']);
            $prenom_eleve = trim($_POST['prenom_eleve']);
            $age_eleve = trim($_POST['age_eleve']);
            $classe_eleve = trim($_POST['classe_eleve']);
            $etablissement_eleve = trim($_POST['etablissement_eleve']);
            $portable_eleve = trim($_POST['portable_eleve']);
            $particularite_eleve = trim($_POST['particularite_eleve']);
            $email_eleve = trim($_POST['email_eleve']);
            $mdp_eleve = password_hash(trim($_POST['mdp_eleve']), PASSWORD_DEFAULT);
            // Champ horaires souhaités par l'élève
            $horaires = $_POST['horaires'];
            $matiere = $_POST['matiere'];

            /**
             * Vérfication et création du responsable
             */
            $requete = 'SELECT * FROM responsable WHERE UPPER(mail_responsable) LIKE UPPER(?)';
            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$email_responsable])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur_responsable = '<div class="alert alert-danger text-center mb-3">Ce responsable existe déjà</div>';
                    require_once('templates/securite/inscription_eleve.php');
                } else {
                    $requete = 'INSERT INTO responsable(nom_responsable,prenom_responsable,adresse_responsable,cdp_responsable,ville_responsable,fixe_responsable,mobile_responsable,mail_responsable,mdp_responsable) VALUES(?,?,?,?,?,?,?,?,?)';
                    if($bdd->doQuery($requete, [$nom_responsable,$prenom_responsable,$adresse_responsable,$cdp_responsable,$ville_responsable,$fixe_responsable,$mobile_responsable,$email_responsable,$mdp_responsable])){
                        $status_requetes = true;
                    } else {
                        return false;
                    }
                }
            }

            // Récupérer dernier id responsable
            $requete = 'SELECT id_responsable FROM responsable ORDER BY id_responsable DESC LIMIT 0,1';
            $bdd->doQuery($requete, []);
            $new_id_responsable = $bdd->tabResultat[0]['id_responsable'];

            /** 
             * Vérification et création de l'élève
             */
            $requete = 'SELECT * FROM eleve WHERE UPPER(mail_eleve) LIKE UPPER(?)';
            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$email_eleve])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Ce eleve existe déjà</div>';
                    require_once('templates/eleve/ajouter.php');
                } else {
                    $requete = 'INSERT INTO eleve (prenom_eleve,nom_eleve,age_eleve,mobile_eleve,mail_eleve,etablissement_eleve,particularite_eleve,mdp_eleve,fk_id_responsable,fk_id_classe) VALUES(?,?,?,?,?,?,?,?,?,?)';
                    if($bdd->doQuery($requete, [$prenom_eleve,$nom_eleve,$age_eleve,$portable_eleve,$email_eleve,$etablissement_eleve,$particularite_eleve,$mdp_eleve,$new_id_responsable,$classe_eleve])){
                        $status_requetes = true;
                    } else {
                        return false;
                    }
                }
            }

            // Récupérer dernier id élève
            $requete = 'SELECT id_eleve FROM eleve ORDER BY id_eleve DESC LIMIT 0,1';
            $bdd->doQuery($requete, []);
            $new_id_eleve = $bdd->tabResultat[0]['id_eleve'];

            /**
             * Vérification et création des choix de l'élève
             */
            foreach($horaires as $horaire){
                // Requête SQL
                $requete = 'SELECT * FROM choix_eleve WHERE UPPER(fk_id_eleve) LIKE UPPER(?) AND UPPER(fk_id_matiere) LIKE UPPER(?) AND UPPER(fk_id_horaire) LIKE UPPER(?)';
                // Exécution de la requête
                if(!$bdd->doQuery($requete,[$new_id_eleve, $matiere, $horaire])){
                    return false;
                } else {
                    if($bdd->tabResultat){
                        $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Ce choix existe existe déjà</div>';
                        require_once('templates/securite/inscription_eleve.php');
                    } else {
                        $requete = 'INSERT INTO choix_eleve(fk_id_eleve,fk_id_matiere,fk_id_horaire) VALUES(?,?,?)';
                        if($bdd->doQuery($requete, [$new_id_eleve, $matiere, $horaire])){
                            $status_requetes = true;
                        } else {
                            return false;
                        }
                    }
                }
            }

            /** 
             * Si toutes les requêtes sont bonnes on redirige 
             */
            if($status_requetes == true){
                $success = '<div class="alert alert-success text-center mb-3">Tout a été ajouté avec succès. Vous pouvez vous connecter</div>';
                require_once('templates/securite/connexion.php');
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