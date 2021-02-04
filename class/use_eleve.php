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