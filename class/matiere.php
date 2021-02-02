<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Table matière
    class Matiere {

        // Attributs
        private $id_matiere;
        private $nom_matiere;

        use hydrate;

        // Getters
        function get_id_matiere():int{
            return $this->id_matiere;
        }

        function get_nom_matiere():String{
            return $this->nom_matiere;
        }

        // Setters
        function set_id_matiere($id){
            if(!empty($id)){
                $this->id_matiere = $id;
            }
        }

        function set_nom_matiere($nom){
            if(!empty($nom)){
                $this->nom_matiere = $nom;
            }
        }

    }

?>