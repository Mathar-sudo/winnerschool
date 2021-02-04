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

        function ajouter(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            
            $nom_responsable = trim($_POST['nom_responsable']);
            $prenom_responsable = trim($_POST['prenom_responsable']);
            $adresse_responsable = trim($_POST['adresse_responsable']);
            $cdp_responsable = trim($_POST['cdp_responsable']);
            $ville_responsable = trim($_POST['ville_responsable']);
            $fixe_responsable = trim($_POST['fixe_responsable']);
            $mobile_responsable = trim($_POST['mobile_responsable']);
            $mail_responsable = trim($_POST['mail_responsable']);
            $mdp_responsable = password_hash(trim($_POST['mdp_responsable']), PASSWORD_DEFAULT);
            
            // Requête SQL
            $requete = 'SELECT * FROM responsable WHERE UPPER(mail_responsable) LIKE UPPER(?)';

            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$mail_responsable])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Ce responsable existe déjà</div>';
                    require_once('templates/responsable/ajouter.php');
                } else {
                    $requete = 'INSERT INTO responsable(nom_responsable,prenom_responsable,adresse_responsable,cdp_responsable,ville_responsable,fixe_responsable,mobile_responsable,mail_responsable,mdp_responsable) VALUES(?,?,?,?,?,?,?,?,?)';
                    if($bdd->doQuery($requete, [$nom_responsable,$prenom_responsable,$adresse_responsable,$cdp_responsable,$ville_responsable,$fixe_responsable,$mobile_responsable,$mail_responsable,$mdp_responsable])){
                        header('Location: ?responsables');
                    } else {
                        return false;
                    }
                }
            }
        }

        
        function modifier($id_responsable){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            
            $nom_responsable = trim($_POST['nom_responsable']);
            $prenom_responsable = trim($_POST['prenom_responsable']);
            $adresse_responsable = trim($_POST['adresse_responsable']);
            $cdp_responsable = trim($_POST['cdp_responsable']);
            $ville_responsable = trim($_POST['ville_responsable']);
            $fixe_responsable = trim($_POST['fixe_responsable']);
            $mobile_responsable = trim($_POST['mobile_responsable']);
            $mail_responsable = trim($_POST['mail_responsable']);
            $mdp_responsable = password_hash(trim($_POST['mdp_responsable']), PASSWORD_DEFAULT);
            
            // Requête SQL
            $requete = 'UPDATE responsable SET nom_responsable = ? ,prenom_responsable = ? ,adresse_responsable = ? ,cdp_responsable = ? ,ville_responsable = ? ,fixe_responsable = ? ,mobile_responsable = ? ,mail_responsable = ? ,mdp_responsable = ? WHERE id_responsable = ?';
            if($bdd->doQuery($requete, [$nom_responsable,$prenom_responsable,$adresse_responsable,$cdp_responsable,$ville_responsable,$fixe_responsable,$mobile_responsable,$mail_responsable,$mdp_responsable,$id_responsable])){
                header('Location: ?responsables');
            } else {
                return false;
            }
        }

        function modifier_perso($id_responsable){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            
            $nom_responsable = trim($_POST['nom_responsable']);
            $prenom_responsable = trim($_POST['prenom_responsable']);
            $adresse_responsable = trim($_POST['adresse_responsable']);
            $cdp_responsable = trim($_POST['cdp_responsable']);
            $ville_responsable = trim($_POST['ville_responsable']);
            $fixe_responsable = trim($_POST['fixe_responsable']);
            $mobile_responsable = trim($_POST['mobile_responsable']);
            $mail_responsable = trim($_POST['mail_responsable']);
            $mdp_responsable = password_hash(trim($_POST['mdp_responsable']), PASSWORD_DEFAULT);
            
            // Requête SQL
            $requete = 'UPDATE responsable SET nom_responsable = ? ,prenom_responsable = ? ,adresse_responsable = ? ,cdp_responsable = ? ,ville_responsable = ? ,fixe_responsable = ? ,mobile_responsable = ? ,mail_responsable = ? ,mdp_responsable = ? WHERE id_responsable = ?';
            if($bdd->doQuery($requete, [$nom_responsable,$prenom_responsable,$adresse_responsable,$cdp_responsable,$ville_responsable,$fixe_responsable,$mobile_responsable,$mail_responsable,$mdp_responsable,$id_responsable])){
                $_SESSION['responsable'] = $prenom_responsable . ' ' . $nom_responsable;
                echo '<script>
                    window.setTimeout(function() {
                        window.location = "?page_responsable=' . $id_responsable . '";
                    }, 1000);
                    </script>';
                echo '<script>alert("Mise à jour effectuée. Cliquez sur OK pour continuer.")</script>';
            } else {
                return false;
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