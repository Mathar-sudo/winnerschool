<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Table matière
    class Matiere {

        // Attributs
        private $fk_id_interventant;
        private $fk_id_eleve;
        private $fk_id_pedagogue;
        private $fk_id_salle;
        private $fk_id_matiere;
        private $numero_semaine;
        private $annee;

        use hydrate;

        // Getters
        function get_fk_id_interventant():int{
            return $this->fk_id_interventant;
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

        // Setters
        function set_fk_id_intervenant($id){
            if(!empty($id)){
                $this->fk_id_intervenant = $id;
            }
        }

        function set_fk_id_eleve($id){
            if(!empty($id)){
                $this->fk_id_eleve = $id;
            }
        }
        function set_fk_id_pedagogue($id){
            if(!empty($id)){
                $this->fk_id_pedagogue = $id;
            }
        }
        function set_fk_id_salle($id){
            if(!empty($id)){
                $this->fk_id_salle = $id;
            }
        }
        function set_fk_id_matiere($id){
            if(!empty($id)){
                $this->fk_id_matiere = $id;
            }
        }
        function set_numero_semaine($numero){
            if(!empty($numero)){
                $this->numero_semaine = $numero;
            }
        }

        function set_annee($annee){
            if(!empty($annee)){
                $this->annee = $annee;
            }
        }
    }

?>