<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Classe {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM classe';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($classes_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($classes_recup as $classe){
                        $classes[] = new Classe($classe);
                    }
                    // On retourne le tableau
                    return $classes;
                } else {
                    return false;
                }
            }
        }

        function findById($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM classe WHERE id_classe = ?';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
                // Récupération des résultats
                if($classe_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($classe_recup as $classe){
                        $classe[] = new Classe($classe);
                    }
                    // On retourne le tableau
                    return $classe[0];
                } else {
                    return false;
                }
            }
        }

        function ajouter(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            $nom_classe = trim($_POST['nom_classe']);
            // Requête SQL
            $requete = 'SELECT * FROM classe WHERE UPPER(nom_classe) LIKE UPPER(?)';

            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$nom_classe])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Cette classe existe déjà</div>';
                    require_once('templates/classe/ajouter.php');
                } else {
                    $requete = 'INSERT INTO classe(nom_classe) VALUES(?)';
                    if($bdd->doQuery($requete, [$nom_classe])){
                        header('Location: ?classes');
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
            $requete = 'DELETE FROM classe WHERE id_classe = ?';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
               header("Location: ?classes") ;
            }
        }

    }

?>