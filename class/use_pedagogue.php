<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Pedagogue {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM pedagogue';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($pedagogues_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($pedagogues_recup as $pedagogue){
                        $pedagogues[] = new Pedagogue($pedagogue);
                    }
                    // On retourne le tableau
                    return $pedagogues;
                } else {
                    return false;
                }
            }
        }

        function findById($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM pedagogue WHERE id_pedagogue =?';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
                // Récupération des résultats
                if($pedagogue_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($pedagogue_recup as $pedagogue){
                        $pedagogue[] = new Pedagogue($pedagogue);
                    }
                    // On retourne le tableau
                    return $pedagogue[0];
                } else {
                    return false;
                }
            }
        }

        function ajouter(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            
            $nom_pedagogue = trim($_POST['nom_pedagogue']);
            $prenom_pedagogue = trim($_POST['prenom_pedagogue']);
            $mail_pedagogue = trim($_POST['mail_pedagogue']);
            $mobile_pedagogue = trim($_POST['mobile_pedagogue']);
            $mdp_pedagogue = password_hash(trim($_POST['mdp_pedagogue']), PASSWORD_DEFAULT);

            // Requête SQL
            $requete = 'SELECT * FROM pedagogue WHERE UPPER(mail_pedagogue) LIKE UPPER(?)';

            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$mail_pedagogue])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Ce pedagogue existe déjà</div>';
                    require_once('templates/pedagogue/ajouter.php');
                } else {
                    $requete = 'INSERT INTO pedagogue(nom_pedagogue,prenom_pedagogue,mail_pedagogue,mobile_pedagogue,mdp_pedagogue) VALUES(?,?,?,?,?)';
                    if($bdd->doQuery($requete, [$nom_pedagogue,$prenom_pedagogue,$mail_pedagogue,$mobile_pedagogue,$mdp_pedagogue])){
                        header('Location: ?pedagogues');
                    } else {
                        return false;
                    }
                }
            }
        }

        function inscription(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
                        
            $nom_pedagogue = trim($_POST['nom_pedagogue']);
            $prenom_pedagogue = trim($_POST['prenom_pedagogue']);
            $mail_pedagogue = trim($_POST['mail_pedagogue']);
            $mobile_pedagogue = trim($_POST['mobile_pedagogue']);
            $mdp_pedagogue = password_hash(trim($_POST['mdp_pedagogue']), PASSWORD_DEFAULT);

            // Requête SQL
            $requete = 'SELECT * FROM pedagogue WHERE UPPER(mail_pedagogue) LIKE UPPER(?)';

            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$mail_pedagogue])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Ce pedagogue existe déjà</div>';
                    require_once('templates/securite/inscription_pedagogue.php');
                } else {
                    $requete = 'INSERT INTO pedagogue(nom_pedagogue,prenom_pedagogue,mail_pedagogue,mobile_pedagogue,mdp_pedagogue) VALUES(?,?,?,?,?)';
                    if($bdd->doQuery($requete, [$nom_pedagogue,$prenom_pedagogue,$mail_pedagogue,$mobile_pedagogue,$mdp_pedagogue])){
                        $success = '<div class="alert alert-success text-center mb-3">Pédagogue ajouté avec succès. Vous pouvez vous connecter</div>';
                        require_once('templates/securite/connexion.php');
                    } else {
                        return false;
                    }
                }
            }
        }

        function supprimer($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            //Requête SQL pour planning
            $requete = 'DELETE FROM planning WHERE fk_id_pedagogue = ?';
            // Exécution de la requête
            $bdd->doQuery($requete, [$id]);
            
            // Requête SQL pour pedagogue
            $requete = 'DELETE FROM pedagogue WHERE id_pedagogue = ?';
            
            // Exécution de la requête
            $bdd->doQuery($requete, [$id]);

            
    }
}

?>