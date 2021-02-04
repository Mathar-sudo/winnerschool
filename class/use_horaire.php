<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Horaire {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM horaire';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($horaires_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($horaires_recup as $horaire){
                        $horaires[] = new horaire($horaire);
                    }
                    // On retourne le tableau
                    return $horaires;
                } else {
                    return false;
                }
            }
        }
        function findById($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM horaire WHERE id_horaire = ?';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
                // Récupération des résultats
                if($horaire_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($horaire_recup as $horaire){
                        $horaire[] = new Horaire($horaire);
                    }
                    // On retourne le tableau
                    return $horaire[0];
                } else {
                    return false;
                }
            }
        }

        function ajouter(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            $jour_horaire = trim($_POST['jour_horaire']);
            $heure_horaire = trim($_POST['heure_horaire']);
            // Requête SQL
            $requete = 'SELECT * FROM horaire WHERE UPPER(jour_horaire) LIKE UPPER(?) AND UPPER(heure_horaire) LIKE UPPER(?)';

            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$jour_horaire,$heure_horaire])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Cette horaire existe déjà</div>';
                    require_once('templates/horaire/ajouter.php');
                } else {
                    $requete = 'INSERT INTO horaire(jour_horaire,heure_horaire) VALUES(?,?)';
                    if($bdd->doQuery($requete, [$jour_horaire,$heure_horaire])){
                        header('Location: ?horaires');
                    } else {
                        return false;
                    }
                }
            }
        }
        
        
        function modifier($id_intervenant){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            // Récupération des valeurs
            $nom_intervenant = trim($_POST['nom_intervenant']);
            // Requête SQL
            $requete = 'SELECT * FROM intervenant WHERE UPPER(nom_intervenant) LIKE UPPER(?)';
            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$nom_intervenant])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Cette intervenant existe déjà</div>';
                    $intervenant = $this->findById($id_intervenant);
                    require_once('templates/intervenant/modifier.php');
                } else {
                    $requete = 'UPDATE intervenant SET nom_intervenant = ? WHERE id_intervenant = ?';
                    if($bdd->doQuery($requete, [$nom_intervenant, $id_intervenant])){
                        header('Location: ?intervenants');
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
            $requete = 'DELETE FROM horaire WHERE id_horaire = ?';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
               header("Location: ?horaires") ;
            }
        }
    }

?>