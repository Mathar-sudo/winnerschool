<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Matiere {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM matiere';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($matieres_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($matieres_recup as $matiere){
                        $matieres[] = new Matiere($matiere);
                    }
                    // On retourne le tableau
                    return $matieres;
                } else {
                    return false;
                }
            }
        }
      

        function findById($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM matiere WHERE id_matiere=?';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
                // Récupération des résultats
                if($matiere_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($matiere_recup as $matiere){
                        $matiere[] = new Matiere($matiere);
                    }
                    // On retourne le tableau
                    return $matiere[0];
                } else {
                    return false;
                }
            }
        }

        function ajouter(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            $nom_matiere = trim($_POST['nom_matiere']);
            // Requête SQL
            $requete = 'SELECT * FROM matiere WHERE UPPER(nom_matiere) LIKE UPPER(?)';

            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$nom_matiere])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Cette matiere existe déjà</div>';
                    require_once('templates/matiere/ajouter.php');
                } else {
                    $requete = 'INSERT INTO matiere(nom_matiere) VALUES(?)';
                    if($bdd->doQuery($requete, [$nom_matiere])){
                        header('Location: ?matieres');
                    } else {
                        return false;
                    }
                }
            }
        }

        function modifier(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            $nom_matiere = trim($_POST['nom_matiere']);
            // Requête SQL
            $requete = 'SELECT * FROM matiere WHERE UPPER(nom_matiere) LIKE UPPER(?)';

            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$nom_matiere])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Cette matiere existe déjà</div>';
                    $matiere = $this->findById($id_matiere);
                    require_once('templates/matiere/modifier.php');
                } else {
                    $requete = 'UPDATE matiere SET nom_matiere = ? WHERE id_matiere = ?';
                    if($bdd->doQuery($requete, [$nom_matiere, $id_matiere])){
                        header('Location: ?matieres');
                    } else {
                        return false;
                    }
                }
            }
        }

        function supprimer($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            //suppression du liebn avec planning
            $requete = 'DELETE FROM planning WHERE fk_id_matiere = ?';
            $bdd->doQuery($requete, [$id]);

            // Requête SQL
            $requete = 'DELETE FROM matiere WHERE id_matiere = ?';

            // Exécution de la requête
           $bdd->doQuery($requete, [$id]);
            
        }
    }

?>