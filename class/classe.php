<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Table classe
    class Classe {

        // Attributs
        private $id_classe;
        private $nom_classe;

        use hydrate;

        // Getters
        function get_id_classe():int{
            return $this->id_classe;
        }

        function get_nom_classe():String{
            return $this->nom_classe;
        }

        // Setters
        function set_id_classe($id){
            if(!empty($id)){
                $this->id_classe = $id;
            }
        }

        function set_nom_classe($nom){
            if(!empty($nom)){
                $this->nom_classe = $nom;
            }
        }

    }

?>