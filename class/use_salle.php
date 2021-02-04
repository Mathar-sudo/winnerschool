<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Salle {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM salle';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($salles_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($salles_recup as $salle){
                        $salles[] = new Salle($salle);
                    }
                    // On retourne le tableau
                    return $salles;
                } else {
                    return false;
                }
            }
        }

        function findById($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM salle WHERE id_salle = ?';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
                // Récupération des résultats
                if($salle_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($salle_recup as $salle){
                        $salle[] = new Salle($salle);
                    }
                    // On retourne le tableau
                    return $salle[0];
                } else {
                    return false;
                }
            }
        }

        function ajouter(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            $nom_salle = trim($_POST['nom_salle']);
            // Requête SQL
            $requete = 'SELECT * FROM salle WHERE UPPER(nom_salle) LIKE UPPER(?)';

            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$nom_salle])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Cette salle existe déjà</div>';
                    require_once('templates/salle/ajouter.php');
                } else {
                    $requete = 'INSERT INTO salle(nom_salle) VALUES(?)';
                    if($bdd->doQuery($requete, [$nom_salle])){
                        header('Location: ?salles');
                    } else {
                        return false;
                    }
                }
            }
        }

        function modifier($id_salle){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
<<<<<<< HEAD
            // Récupération des valeurs
            $nom_salle = trim($_POST['nom_salle']);
            // Requête SQL
            $requete = 'SELECT * FROM salle WHERE UPPER(nom_salle) LIKE UPPER(?)';
=======

            $nom_salle = trim($_POST['nom_salle']);
            // Requête SQL
            $requete = 'SELECT * FROM salle WHERE UPPER(nom_salle) LIKE UPPER(?)';

>>>>>>> 02b6e98838e824afd8f8cd996a102c2dac8fadf8
            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$nom_salle])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Cette salle existe déjà</div>';
                    $salle = $this->findById($id_salle);
                    require_once('templates/salle/modifier.php');
                } else {
                    $requete = 'UPDATE salle SET nom_salle = ? WHERE id_salle = ?';
                    if($bdd->doQuery($requete, [$nom_salle, $id_salle])){
                        header('Location: ?salles');
                    } else {
                        return false;
                    }
                }
            }
        }

        function supprimer($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            $requete = 'DELETE FROM planning WHERE fk_id_salle = ?';
            $bdd->doQuery($requete, [$id]);

            // Requête SQL
            $requete = 'DELETE FROM salle WHERE id_salle = ?';
            // Exécution de la requête
            $bdd->doQuery($requete, [$id]);

        }
    }

?>