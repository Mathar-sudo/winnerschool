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
                            $_SESSION['id_secretaire'] = $bdd->tabResultat[0]['id_admin'];
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

        function ajouter_secretaire(){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            // Récupération des valeurs
            $login = trim($_POST['login_secretaire']);
            $mdp = password_hash(trim($_POST['mdp_secretaire']), PASSWORD_DEFAULT);

            $requete = 'SELECT * FROM admin WHERE UPPER(login_admin) LIKE UPPER(?) AND statut LIKE (\'Secrétaire\')';
            if($bdd->doQuery($requete, [$login])){
                if(!$bdd->tabResultat){
                    $requete = 'INSERT INTO admin (login_admin, mdp_admin, statut) VALUES (?,?,?)';
                    $bdd->doQuery($requete, [$login, $mdp, 'Secrétaire']);
                    header('Location: ?connexion');
                }
            }
        }

        function findById($id){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            // Requête SQL
            $requete = 'SELECT * FROM admin WHERE id_admin = ?';
            // Exécution de la requête
            if(!$bdd->doQuery($requete, [$id])){
                return false;
            } else {
                // Récupération des résultats
                if($admin_recup = $bdd->tabResultat){
                    // On ajoute un nouvel objet au tableau (avec hydrate)
                    foreach($admin_recup as $admin){
                        $admin[] = new Admin($admin);
                    }
                    // On retourne le tableau
                    return $admin[0];
                } else {
                    return false;
                }
            }
        }

        function modifier($id_admin){
            // Connexion à la base de données
            $bdd = new Connexion_bdd();
            // Récupération des valeurs
            $login = trim($_POST['login_secretaire']);
            $mdp = password_hash(trim($_POST['mdp_secretaire']), PASSWORD_DEFAULT);

            $requete = 'UPDATE admin SET login_admin = ?, mdp_admin = ?, statut = ? WHERE id_admin = ?';
            $bdd->doQuery($requete, [$login, $mdp, 'Secrétaire', $id_admin]);
            echo '<script>
                window.setTimeout(function() {
                    window.location = "?secretaire=' . $id_admin . '";
                }, 1000);
                </script>';
            echo '<script>alert("Mise à jour effectuée. Cliquez sur OK pour continuer.")</script>';
        }

    }

?>