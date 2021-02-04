<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Choix_Eleve {

        function findAll(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            // Requête SQL
            $requete = 'SELECT * FROM choix_eleve';

            // Exécution de la requête
            if(!$bdd->doQuery($requete, [])){
                return false;
            } else {
                // Récupération des résultats
                if($choix_eleves_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($choix_eleves_recup as $choix_eleve){
                        $choix_eleves[] = new Choix_Eleve($choix_eleve);
                    }
                    // On retourne le tableau
                    return $choix_eleves;
                } else {
                    return false;
                }
            }
        }

        function ajouter(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            $id_eleve=$_POST['eleve'];
            $id_matiere=$_POST['matiere'];
            $horaires=$_POST['horaire'];
            foreach($horaires as $horaire){
               
                // Requête SQL
            $requete = 'SELECT * FROM choix_eleve WHERE UPPER(fk_id_eleve) LIKE UPPER(?) AND UPPER(fk_id_matiere) LIKE UPPER(?) AND UPPER(fk_id_horaire) LIKE UPPER(?)';

            // Exécution de la requête
            if(!$bdd->doQuery($requete,[$id_eleve, $id_matiere, $horaire])){
                return false;
            } else {
                if($bdd->tabResultat){
                    $erreur = '<div class="alert alert-danger text-center mb-3 w-25">Ce choix d\'élève existe déjà</div>';
                    require_once('templates/choix_eleve/ajouter.php');
                } else {
                    $requete = 'INSERT INTO choix_eleve(fk_id_eleve,fk_id_matiere,fk_id_horaire) VALUES(?,?,?)';
                    if($bdd->doQuery($requete, [$id_eleve, $id_matiere, $horaire])){
                        header('Location: ?choix_eleves');
                    } else {
                        return false;
                    }
                }
            }

            }
            
            
        }


        function supprimer(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            $id_eleve=$_POST['id_eleve'];
            $id_matiere=$_POST['id_matiere'];
            $id_horaire=$_POST['id_horaire'];

            // Requête SQL
            $requete = 'DELETE FROM choix_eleve WHERE fk_id_eleve=? AND fk_id_matiere=? AND fk_id_horaire=?';

            // Exécution de la requête
            $bdd->doQuery($requete, [$id_eleve,$id_matiere,$id_horaire]);
            
        }

    }

?>