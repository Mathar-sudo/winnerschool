<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Table admin
    class Admin {

        // Attributs
        private $id_admin;
        private $login_admin;
        private $mdp_admin;
        private $statut;

        use hydrate;

        // Getters
        function get_id_admin():int{
            return $this->id_admin;
        }

        function get_login_admin():String{
            return $this->login_admin;
        }

        function get_mdp_admin():String{
            return $this->mdp_admin;
        }

        function get_statut():String{
            return $this->statut;
        }

        // Setters
        function set_id_admin($id){
            if(!empty($id)){
                $this->id_admin = $id;
            }
        }

        function set_login_admin($login){
            if(!empty($login)){
                $this->login_admin = $login;
            }
        }

        function set_mdp_admin($mdp){
            if(!empty($mdp)){
                $this->mdp_admin = $mdp;
            }
        }

        function set_statut($statut){
            if(!empty($statut)){
                $this->statut = $statut;
            }
        }

    }

?>