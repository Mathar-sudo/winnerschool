<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Table choix eleve
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
            return $this->fk_numero_semaine;
        }
        function get_annee():int{
            return $this->fk_annee;
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