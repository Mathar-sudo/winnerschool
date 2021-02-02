<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Table planning
    class Planning {

        // Attributs
        private $fk_id_intervenant;
        private $fk_id_eleve;
        private $fk_id_pedagogue;
        private $fk_id_salle;
        private $fk_id_matiere;
        private $numero_semaine;
        private $annee;

        use hydrate;

        // Getters
        function get_fk_id_intervenant():int{
            return $this->fk_id_intervenant;
        }
        function get_fk_id_eleve():int{
            return $this->fk_id_eleve;
        }
        function get_fk_id_pedagogue():int{
            return $this->fk_id_pedagogue;
        }
        function get_fk_id_salle():int{
            return $this->fk_id_salle;
        }
        function get_fk_id_matiere():int{
            return $this->fk_id_matiere;
        }
        function get_numero_semaine():int{
            return $this->numero_semaine;
        }
        function get_annee():int{
            return $this->annee;
        }

        // Récupérer l'intervenant
        function get_intervenant():String{
            $bdd = new Connexion_bdd();
            $requete = 'SELECT * FROM intervenant WHERE id_intervenant = ?';
            if($bdd->doQuery($requete, [$this->fk_id_intervenant])){
                if($intervenant_result = $bdd->tabResultat){
                    return $intervenant_result[0]['prenom_intervenant'] . ' ' . $intervenant_result[0]['nom_intervenant'];
                } else {
                    return false;
                }
            } else {
                return false;
            }
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

        // Récupérer le pédagogue
        function get_pedagogue():String{
            $bdd = new Connexion_bdd();
            $requete = 'SELECT * FROM pedagogue WHERE id_pedagogue = ?';
            if($bdd->doQuery($requete, [$this->fk_id_pedagogue])){
                if($pedagogue_result = $bdd->tabResultat){
                    return $pedagogue_result[0]['prenom_pedagogue'] . ' ' . $pedagogue_result[0]['nom_pedagogue'];
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        // Récupérer la salle
        function get_salle():String{
            $bdd = new Connexion_bdd();
            $requete = 'SELECT * FROM salle WHERE id_salle = ?';
            if($bdd->doQuery($requete, [$this->fk_id_salle])){
                if($salle_result = $bdd->tabResultat){
                    return $salle_result[0]['nom_salle'];
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


        // Setters
        function set_fk_id_intervenant($fk_id_intervenant){
            if(!empty($fk_id_intervenant)){
                $this->fk_id_intervenant = $fk_id_intervenant;
            }
        }
        function set_fk_id_eleve($fk_id_eleve){
            if(!empty($fk_id_eleve)){
                $this->fk_id_eleve = $fk_id_eleve;
            }
        }
        function set_fk_id_pedagogue($fk_id_pedagogue){
            if(!empty($fk_id_pedagogue)){
                $this->fk_id_pedagogue = $fk_id_pedagogue;
            }
        }
        
        function set_fk_id_salle($fk_id_salle){
            if(!empty($fk_id_salle)){
                $this->fk_id_salle = $fk_id_salle;
            }
        }

        function set_fk_id_matiere($fk_id_matiere){
            if(!empty($fk_id_matiere)){
                $this->fk_id_matiere = $fk_id_matiere;
            }
        }
        function set_numero_semaine($numero_semaine){
            if(!empty($numero_semaine)){
                $this->numero_semaine = $numero_semaine;
            }
        }
        function set_annee($annee){
            if(!empty($annee)){
                $this->annee = $annee;
            }
        }
    }

?>