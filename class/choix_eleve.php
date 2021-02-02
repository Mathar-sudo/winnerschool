<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Table choix eleve
    class Choix_Eleve {

        // Attributs
        private $fk_id_eleve;
        private $fk_id_matiere;
        private $fk_id_horaire;

        use hydrate;

        // Getters
        function get_fk_id_eleve():int{
            return $this->fk_id_eleve;
        }

        function get_fk_id_matiere():int{
            return $this->fk_id_matiere;
        }
        function get_fk_id_horaire():int{
            return $this->fk_id_horaire;
        }

        // Récupérer l'élève
        function get_eleve():String{
            $bdd = new Connexion_bdd();
            $requete = 'SELECT * FROM eleve WHERE id_eleve = ?';
            if($bdd->doQuery($requete, [$this->fk_id_eleve])){
                if($eleve_result = $bdd->tabResultat){
                    return $eleve_result[0]['prenom_eleve'] . ' ' . $eleve_result[0]['nom_eleve'];
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        // Récupérer la matière
        function get_matiere():String{
            $bdd = new Connexion_bdd();
            $requete = 'SELECT * FROM matiere WHERE id_matiere = ?';
            if($bdd->doQuery($requete, [$this->fk_id_matiere])){
                if($matiere_result = $bdd->tabResultat){
                    return $matiere_result[0]['nom_matiere'];
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        // Récupérer l'horaire
        function get_horaire():String{
            $bdd = new Connexion_bdd();
            $requete = 'SELECT * FROM horaire WHERE id_horaire = ?';
            if($bdd->doQuery($requete, [$this->fk_id_horaire])){
                if($horaire_result = $bdd->tabResultat){
                    return $horaire_result[0]['jour_horaire'] . ' à ' . $horaire_result[0]['heure_horaire'];
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        // Setters
        function set_fk_id_eleve($fk_id_eleve){
            if(!empty($fk_id_eleve)){
                $this->fk_id_eleve = $fk_id_eleve;
            }
        }

        function set_fk_id_matiere($fk_id_matiere){
            if(!empty($fk_id_matiere)){
                $this->fk_id_matiere = $fk_id_matiere;
            }
        }

        function set_fk_id_horaire($fk_id_horaire){
            if(!empty($fk_id_horaire)){
                $this->fk_id_horaire = $fk_id_horaire;
            }
        }

    }

?>