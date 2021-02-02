<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Admin {

        function connexion($email, $mdp, $type_connexion){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            if($type_connexion == 'admin'){
                $requete = 'SELECT * FROM admin WHERE UPPER(login_admin) LIKE UPPER(?)';
                if($bdd->doQuery($requete, [$email])){
                    // Vérification si une ligne existe
                    if($bdd->tabResultat){
                        // Vérification du mot de passe correspondant au login entré
                        if(password_verify($mdp, $bdd->tabResultat[0]['mdp_admin'])){
                            $_SESSION['admin'] = $email;
                            header('Location: ?accueil');
                        }
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            }
        }

    }

?>