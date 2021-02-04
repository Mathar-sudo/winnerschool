<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Intervenant {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM intervenant';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($intervenants_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($intervenants_recup as $intervenant){
                        $intervenants[] = new Intervenant($intervenant);
                    }
                    // On retourne le tableau
                    return $intervenants;
                } else {
                    return false;
                }
            }
        }

        function findById($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM intervenant WHERE id_intervenant=?';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
                // Récupération des résultats
                if($intervenant_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($intervenant_recup as $intervenant){
                        $intervenant[] = new Intervenant($intervenant);
                    }
                    // On retourne le tableau
                    return $intervenant[0];
                } else {
                    return false;
                }
            }
        }

        function ajouter(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            // Récupération des valeurs du formulaire
            $nom_intervenant = trim($_POST['nom_intervenant']);
            $prenom_intervenant = trim($_POST['prenom_intervenant']);
            $adresse_intervenant = trim($_POST['adresse_intervenant']);
            $cdp_intervenant = $_POST['code_postale_intervenant'];
            $ville_intervenant = trim($_POST['ville_intervenant']);
            $fixe_intervenant = trim($_POST['fixe_intervenant']);
            $mail_intervenant = trim($_POST['mail_intervenant']);
            $mobile_intervenant = trim($_POST['mobile_intervenant']);
            $niveau_intervenant = trim($_POST['niveau_intervenant']);
            $specialite_intervenant = trim($_POST['specialite_intervenant']);
            $profession_intervenant = trim($_POST['profession_intervenant']);
            $experience_intervenant = trim($_POST['experience_intervenant']);
            $connaissance_intervenant = trim($_POST['connaissance_intervenant']);
            $mdp_intervenant = password_hash(trim($_POST['mdp_intervenant']), PASSWORD_DEFAULT);

            //Vérification des fichiers
            if(!empty($_FILES['casier_intervenant']['name'])){
                $dossier_cible = 'documents';
                $tmp_name = $_FILES['casier_intervenant']['tmp_name'];
                $casier_intervenant = basename($_FILES['casier_intervenant']['name']);
                $fichier_cible = $dossier_cible . '/' . $casier_intervenant;
                move_uploaded_file($tmp_name, $fichier_cible);
            } else {
                $casier_intervenant = null;
            }
            if(!empty($_FILES['photo1_intervenant']['name'])){
                $dossier_cible = 'documents';
                $tmp_name = $_FILES['photo1_intervenant']['tmp_name'];
                $photo1_intervenant = basename($_FILES['photo1_intervenant']['name']);
                $fichier_cible = $dossier_cible . '/' . $photo1_intervenant;
                move_uploaded_file($tmp_name, $fichier_cible);
            } else {
                $photo1_intervenant = null;
            }
            if(!empty($_FILES['photo2_intervenant']['name'])){
                $dossier_cible = 'documents';
                $tmp_name = $_FILES['photo2_intervenant']['tmp_name'];
                $photo2_intervenant = basename($_FILES['photo2_intervenant']['name']);
                $fichier_cible = $dossier_cible . '/' . $photo2_intervenant;
                move_uploaded_file($tmp_name, $fichier_cible);
            } else {
                $photo2_intervenant = null;
            }
            //Requête, vérification du mail
            $requete = 'SELECT * FROM intervenant WHERE UPPER(mail_intervenant) LIKE UPPER(?)';
           
            if(!$bdd->doQuery($requete,[ $mail_intervenant])){
                return false;
                
            } else {
                
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Cette intervenant existe déjà</div>';
                    require_once('templates/intervenant/ajouter.php');
                } else {
                    $requete = 'INSERT INTO intervenant(nom_intervenant, prenom_intervenant, adresse_intervenant, cdp_intervenant, ville_intervenant, fixe_intervenant, mobile_intervenant, mail_intervenant, casier_intervenant, photo1_intervenant, photo2_intervenant, niveau_intervenant, specialite_intervenant, profession_intervenant, experience_intervenant, connaissance_intervenant, mdp_intervenant) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
                 
                    if($bdd->doQuery($requete, [$nom_intervenant, $prenom_intervenant, $adresse_intervenant, $cdp_intervenant, $ville_intervenant, $fixe_intervenant, $mobile_intervenant, $mail_intervenant, $casier_intervenant, $photo1_intervenant, $photo2_intervenant, $niveau_intervenant, $specialite_intervenant, $profession_intervenant, $experience_intervenant, $connaissance_intervenant, $mdp_intervenant])){
                        header('Location: ?intervenants');
                    } else{
                        return false;
                    }
                }
            }
        }

        function modifier($id_intervenant){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            // Récupération des valeurs du formulaire
            $nom_intervenant = trim($_POST['nom_intervenant']);
            $prenom_intervenant = trim($_POST['prenom_intervenant']);
            $adresse_intervenant = trim($_POST['adresse_intervenant']);
            $cdp_intervenant = $_POST['code_postale_intervenant'];
            $ville_intervenant = trim($_POST['ville_intervenant']);
            $fixe_intervenant = trim($_POST['fixe_intervenant']);
            $mail_intervenant = trim($_POST['mail_intervenant']);
            $mobile_intervenant = trim($_POST['mobile_intervenant']);
            $niveau_intervenant = trim($_POST['niveau_intervenant']);
            $specialite_intervenant = trim($_POST['specialite_intervenant']);
            $profession_intervenant = trim($_POST['profession_intervenant']);
            $experience_intervenant = trim($_POST['experience_intervenant']);
            $connaissance_intervenant = trim($_POST['connaissance_intervenant']);
            $mdp_intervenant = password_hash(trim($_POST['mdp_intervenant']), PASSWORD_DEFAULT);

        

            //Requête       
            $requete = 'UPDATE intervenant SET nom_intervenant = ?, prenom_intervenant = ?, adresse_intervenant = ?, cdp_intervenant = ?, ville_intervenant = ?, fixe_intervenant = ?, mobile_intervenant = ?, mail_intervenant = ?,  niveau_intervenant = ?, specialite_intervenant = ?, profession_intervenant = ?, experience_intervenant = ?, connaissance_intervenant = ?, mdp_intervenant = ? WHERE id_intervenant = ?';
                 
            if($bdd->doQuery($requete, [$nom_intervenant, $prenom_intervenant, $adresse_intervenant, $cdp_intervenant, $ville_intervenant, $fixe_intervenant, $mobile_intervenant, $mail_intervenant, $niveau_intervenant, $specialite_intervenant, $profession_intervenant, $experience_intervenant, $connaissance_intervenant, $mdp_intervenant, $id_intervenant])){
            header('Location: ?intervenants');
            } else {
                return false;
                }
                
        }
        

        function inscription(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            // Récupération des valeurs du formulaire
            $nom_intervenant = trim($_POST['nom_intervenant']);
            $prenom_intervenant = trim($_POST['prenom_intervenant']);
            $adresse_intervenant = trim($_POST['adresse_intervenant']);
            $cdp_intervenant = trim($_POST['code_postal_intervenant']);
            $ville_intervenant = trim($_POST['ville_intervenant']);
            $fixe_intervenant = trim($_POST['fixe_intervenant']);
            $portable_intervenant = trim($_POST['portable_intervenant']);
            $email_intervenant = trim($_POST['email_intervenant']);
            $mdp_intervenant = password_hash(trim($_POST['mdp_intervenant']), PASSWORD_DEFAULT);
            $niveau_intervenant = trim($_POST['niveau_intervenant']);
            $specialite_intervenant = trim($_POST['specialite_intervenant']);
            $profession_intervenant = trim($_POST['profession_intervenant']);
            $experience_intervenant = trim($_POST['experience_intervenant']);
            $connaissance_intervenant = trim($_POST['connaissance_intervenant']);
            if(!empty($_FILES['casier_intervenant']['name'])){
                $dossier_cible = 'documents';
                $tmp_name = $_FILES['casier_intervenant']['tmp_name'];
                $casier_intervenant = basename($_FILES['casier_intervenant']['name']);
                $fichier_cible = $dossier_cible . '/' . $casier_intervenant;
                move_uploaded_file($tmp_name, $fichier_cible);
            } else {
                $casier_intervenant = null;
            }
            if(!empty($_FILES['photo1_intervenant']['name'])){
                $dossier_cible = 'documents';
                $tmp_name = $_FILES['photo1_intervenant']['tmp_name'];
                $photo1_intervenant = basename($_FILES['photo1_intervenant']['name']);
                $fichier_cible = $dossier_cible . '/' . $photo1_intervenant;
                move_uploaded_file($tmp_name, $fichier_cible);
            } else {
                $photo1_intervenant = null;
            }
            if(!empty($_FILES['photo2_intervenant']['name'])){
                $dossier_cible = 'documents';
                $tmp_name = $_FILES['photo2_intervenant']['tmp_name'];
                $photo2_intervenant = basename($_FILES['photo2_intervenant']['name']);
                $fichier_cible = $dossier_cible . '/' . $photo2_intervenant;
                move_uploaded_file($tmp_name, $fichier_cible);
            } else {
                $photo2_intervenant = null;
            }

            // Requête d'insertion
            $requete = 'SELECT * FROM intervenant WHERE UPPER(mail_intervenant) LIKE UPPER (?)';
            if(!$bdd->doQuery($requete,[$email_intervenant])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Cette adresse email est déjà attribuée</div>';
                    require_once('templates/securite/inscription_intervenant.php');
                } else {
                    $requete = 'INSERT INTO intervenant(nom_intervenant, prenom_intervenant, adresse_intervenant, cdp_intervenant, ville_intervenant, fixe_intervenant, mobile_intervenant, mail_intervenant, casier_intervenant, photo1_intervenant, photo2_intervenant, niveau_intervenant, specialite_intervenant, profession_intervenant, experience_intervenant, connaissance_intervenant, mdp_intervenant) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
                    if($bdd->doQuery($requete, [$nom_intervenant, $prenom_intervenant, $adresse_intervenant, $cdp_intervenant, $ville_intervenant, $fixe_intervenant, $portable_intervenant, $email_intervenant, $casier_intervenant, $photo1_intervenant, $photo2_intervenant, $niveau_intervenant, $specialite_intervenant, $profession_intervenant, $experience_intervenant, $connaissance_intervenant, $mdp_intervenant])){
                        $success = '<div class="alert alert-success text-center mb-3">Intervenant ajouté avec succès. Vous pouvez vous connecter</div>';
                        require_once('templates/securite/connexion.php');
                    } else {
                        echo('coucou');
                        return false;
                    }
                }
            }
        }

        function supprimer($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'DELETE FROM intervenant WHERE id_intervenant = ?';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
               header("Location: ?intervenants") ;
            }
        }

    }

?>