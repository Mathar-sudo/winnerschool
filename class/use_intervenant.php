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
            
            $nom_intervenant = trim($_POST['nom_intervenant']);
            $prenom_intervenant = trim($_POST['prenom_intervenant']);
            $adresse_intervenant = trim($_POST['adresse_intervenant']);
            $cdp_intervenant = $_POST['code_postale_intervenant'];
            $ville_intervenant = trim($_POST['ville_intervenant']);
            $fixe_intervenant = trim($_POST['fixe_intervenant']);
            $mobile_intervenant = trim($_POST['mobile_intervenant']);            
            $mail_intervenant = trim($_POST['mail_intervenant']);
            $casier_intervenant = trim($_POST['casier_intervenant']);
            $photo1_intervenant = trim($_POST['photo1_intervenant']);
            $photo2_intervenant = trim($_POST['photo2_intervenant']);
            $niveau_intervenant = trim($_POST['niveau_intervenant']);
            $specialite_intervenant = trim($_POST['specialite_intervenant']);
            $profession_intervenant = trim($_POST['profession_intervenant']);
            $experience_intervenant = trim($_POST['experience_intervenant']);
            $connaissance_intervenant = trim($_POST['connaissance_intervenant']);
            $mdp_intervenant = password_hash(trim($_POST['mdp_intervenant']), PASSWORD_DEFAULT);

            $requete = 'SELECT * FROM intervenant WHERE UPPER(mail_intervenant) LIKE UPPER(?)';
           
            if(!$bdd->doQuery($requete,[ $mail_intervenant])){
                return false;
                
            } else {
                
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Cette intervenant existe déjà</div>';
                    require_once('templates/intervenant/ajouter.php');
                } else {
                    $requete = 'INSERT INTO intervenant(nom_intervenant, prenom_intervenant, adresse_intervenant, 
                    cdp_intervenant, ville_intervenant, fixe_intervenant, mobile_intervenant, mail_intervenant, 
                    casier_intervenant, photo1_intervenant, photo2_intervenant, niveau_intervenant, 
                    specialite_intervenant, profession_intervenant, experience_intervenant, connaissance_intervenant, mdp_intervenant) 
                    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
                   
                    if($bdd->doQuery($requete, [$nom_intervenant, $prenom_intervenant, $adresse_intervenant, 
                    $cdp_intervenant, $ville_intervenant, $fixe_intervenant, $mobile_intervenant, 
                    $mail_intervenant, $casier_intervenant, $photo1_intervenant, $photo2_intervenant, 
                    $niveau_intervenant, $specialite_intervenant, $profession_intervenant, $experience_intervenant, 
                    $connaissance_intervenant, $mdp_intervenant])){
                        header('Location: ?intervenants');
                    } else {
                        echo ("coucou");
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