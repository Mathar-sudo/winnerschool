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
        
        
        function modifier($id_horaire){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            // Récupération des valeurs
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
                    $horaire = $this->findById($id_horaire);
                    require_once('templates/horaire/modifier.php');
                } else {
                    $requete = 'UPDATE horaire SET jour_horaire = ?, heure_horaire = ? WHERE id_horaire = ?';
                    if($bdd->doQuery($requete, [$jour_horaire, $heure_horaire, $id_horaire])){
                        header('Location: ?horaires');
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