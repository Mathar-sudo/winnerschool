<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Table salle
    class Salle {

        // Attributs
        private $id_salle;
        private $nom_salle;

        use hydrate;

        // Getters
        function get_id_salle():int{
            return $this->id_salle;
        }

        function get_nom_salle():String{
            return $this->nom_salle;
        }

        // Setters
        function set_id_salle($id){
            if(!empty($id)){
                $this->id_salle = $id;
            }
        }

        function set_nom_salle($nom){
            if(!empty($nom)){
                $this->nom_salle = $nom;
            }
        }

    }

?>