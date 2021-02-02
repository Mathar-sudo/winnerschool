<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Table Admin
    class Horaire {

        // Attributs
        private $id_horaire;
        private $jour_horaire;
        private $heure_horaire;
        

        use hydrate;

        // Getters
        function get_id_horaire():int{
            return $this->id_horaire;
        }

        function get_jour_horaire():String{
            return $this->jour_horaire;
        }

        function get_heure_horaire():String{
            return $this->heure_horaire;
        }

        // Setters
        function set_id_horaire($id){
            if(!empty($id)){
                $this->id_horaire = $id;
            }
        }

        function set_jour_horaire($jour){
            if(!empty($jour)){
                $this->jour_horaire = $jour;
            }
        }

        function set_heure_horaire($heure){
            if(!empty($heure)){
                $this->heure_horaire = $heure;
            }
        }

    

    }

?>