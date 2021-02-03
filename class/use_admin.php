<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Classe de gestion
    class Use_Admin {

        function connexion($email, $mdp, $type_connexion){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();

            if($type_connexion == 'admin'){
                $requete = 'SELECT * FROM admin WHERE UPPER(login_admin) LIKE UPPER(?) AND statut LIKE \'Administrateur\'';
                if($bdd->doQuery($requete, [$email])){
                    // Vérification si une ligne existe
                    if($bdd->tabResultat){
                        // Vérification du mot de passe correspondant au login entré
                        if(password_verify($mdp, $bdd->tabResultat[0]['mdp_admin'])){
                            $_SESSION['admin'] = 'Administrateur';
                            header('Location: ?accueil');
                        } else {
                            $erreur = '<div class="alert alert-danger mb-3">Les identifiants sont incorrects</div>';
                            require_once('templates/securite/connexion.php');
                        }
                    } else {
                        $erreur = '<div class="alert alert-danger mb-3">Les identifiants sont incorrects</div>';
                        require_once('templates/securite/connexion.php');
                    }
                } else {
                    return false;
                }
            } else if($type_connexion == 'secretaire'){
                $requete = 'SELECT * FROM admin WHERE UPPER(login_admin) LIKE UPPER(?) AND statut LIKE \'Secrétaire\'';
                if($bdd->doQuery($requete, [$email])){
                    // Vérification si une ligne existe
                    if($bdd->tabResultat){
                        // Vérification du mot de passe correspondant au login entré
                        if(password_verify($mdp, $bdd->tabResultat[0]['mdp_admin'])){
                            $_SESSION['secretaire'] = 'Secrétaire';
                            header('Location: ?accueil');
                        } else {
                            $erreur = '<div class="alert alert-danger mb-3">Les identifiants sont incorrects</div>';
                            require_once('templates/securite/connexion.php');
                        }
                    } else {
                        $erreur = '<div class="alert alert-danger mb-3">Les identifiants sont incorrects</div>';
                        require_once('templates/securite/connexion.php');
                    }
                } else {
                    return false;
                }
            } else if($type_connexion == 'intervenant'){
                $requete = 'SELECT * FROM intervenant WHERE UPPER(mail_intervenant) LIKE UPPER(?)';
                if($bdd->doQuery($requete, [$email])){
                    // Vérification si une ligne existe
                    if($bdd->tabResultat){
                        // Vérification du mot de passe correspondant au login entré
                        if(password_verify($mdp, $bdd->tabResultat[0]['mdp_intervenant'])){
                            $_SESSION['intervenant'] = $bdd->tabResultat[0]['prenom_intervenant'] . ' ' . $bdd->tabResultat[0]['nom_intervenant'];
                            $_SESSION['id_intervenant'] = $bdd->tabResultat[0]['id_intervenant'];
                            header('Location: ?accueil');
                        } else {
                            $erreur = '<div class="alert alert-danger mb-3">Les identifiants sont incorrects</div>';
                            require_once('templates/securite/connexion.php');
                        }
                    } else {
                        $erreur = '<div class="alert alert-danger mb-3">Les identifiants sont incorrects</div>';
                        require_once('templates/securite/connexion.php');
                    }
                } else {
                    return false;
                }
            } else if($type_connexion == 'eleve'){
                $requete = 'SELECT * FROM eleve WHERE UPPER(mail_eleve) LIKE UPPER(?)';
                if($bdd->doQuery($requete, [$email])){
                    // Vérification si une ligne existe
                    if($bdd->tabResultat){
                        // Vérification du mot de passe correspondant au login entré
                        if(password_verify($mdp, $bdd->tabResultat[0]['mdp_eleve'])){
                            $_SESSION['eleve'] = $bdd->tabResultat[0]['prenom_eleve'] . ' ' . $bdd->tabResultat[0]['nom_eleve'];
                            $_SESSION['id_eleve'] = $bdd->tabResultat[0]['id_eleve'];
                            header('Location: ?accueil');
                        } else {
                            $erreur = '<div class="alert alert-danger mb-3">Les identifiants sont incorrects</div>';
                            require_once('templates/securite/connexion.php');
                        }
                    } else {
                        $erreur = '<div class="alert alert-danger mb-3">Les identifiants sont incorrects</div>';
                        require_once('templates/securite/connexion.php');
                    }
                } else {
                    return false;
                }
            } else if($type_connexion == 'pedagogue'){
                $requete = 'SELECT * FROM pedagogue WHERE UPPER(mail_pedagogue) LIKE UPPER(?)';
                if($bdd->doQuery($requete, [$email])){
                    // Vérification si une ligne existe
                    if($bdd->tabResultat){
                        // Vérification du mot de passe correspondant au login entré
                        if(password_verify($mdp, $bdd->tabResultat[0]['mdp_pedagogue'])){
                            $_SESSION['pedagogue'] = $bdd->tabResultat[0]['prenom_pedagogue'] . ' ' . $bdd->tabResultat[0]['nom_pedagogue'];
                            $_SESSION['id_pedagogue'] = $bdd->tabResultat[0]['id_pedagogue'];
                            header('Location: ?accueil');
                        } else {
                            $erreur = '<div class="alert alert-danger mb-3">Les identifiants sont incorrects</div>';
                            require_once('templates/securite/connexion.php');
                        }
                    } else {
                        $erreur = '<div class="alert alert-danger mb-3">Les identifiants sont incorrects</div>';
                        require_once('templates/securite/connexion.php');
                    }
                } else {
                    return false;
                }
            } else if($type_connexion == 'responsable'){
                $requete = 'SELECT * FROM responsable WHERE UPPER(mail_responsable) LIKE UPPER(?)';
                if($bdd->doQuery($requete, [$email])){
                    // Vérification si une ligne existe
                    if($bdd->tabResultat){
                        // Vérification du mot de passe correspondant au login entré
                        if(password_verify($mdp, $bdd->tabResultat[0]['mdp_responsable'])){
                            $_SESSION['responsable'] = $bdd->tabResultat[0]['prenom_responsable'] . ' ' . $bdd->tabResultat[0]['nom_responsable'];
                            $_SESSION['id_responsable'] = $bdd->tabResultat[0]['id_responsable'];
                            header('Location: ?accueil');
                        } else {
                            $erreur = '<div class="alert alert-danger mb-3">Les identifiants sont incorrects</div>';
                            require_once('templates/securite/connexion.php');
                        }
                    } else {
                        $erreur = '<div class="alert alert-danger mb-3">Les identifiants sont incorrects</div>';
                        require_once('templates/securite/connexion.php');
                    }
                } else {
                    return false;
                }
            }
        }

    }

?>