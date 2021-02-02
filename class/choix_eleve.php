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