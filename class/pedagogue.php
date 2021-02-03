<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Table pedagogue
    class pedagogue {

        // Attributs
        private $id_pedagogue;
        private $nom_pedagogue;
        private $prenom_pedagogue;
        private $mail_pedagogue;
        private $mobile_pedagogue;
        private $mdp_pedagogue;

        use hydrate;

        // Getters
        function get_id_pedagogue():int{
            return $this->id_pedagogue;
        }

        function get_nom_pedagogue():String{
            return $this->nom_pedagogue;
        }

        function get_prenom_pedagogue():String{
            return $this->prenom_pedagogue;
        }

        function get_mail_pedagogue():String{
            return $this->mail_pedagogue;
        }

        function get_mobile_pedagogue():String{
            return $this->mobile_pedagogue;
        }

        function get_mdp_pedagogue():String{
            return $this->mdp_pedagogue;
        }


        // Setters
        function set_id_pedagogue($id){
            if(!empty($id)){
                $this->id_pedagogue = $id;
            }
        }

        function set_nom_pedagogue($nom){
            if(!empty($nom)){
                $this->nom_pedagogue = $nom;
            }
        }

        function set_prenom_pedagogue($prenom){
            if(!empty($prenom)){
                $this->prenom_pedagogue = $prenom;
            }
        }

        function set_mail_pedagogue($mail){
            if(!empty($mail)){
                $this->mail_pedagogue = $mail;
            }
        }

        function set_mobile_pedagogue($mobile){
            if(!empty($mobile)){
                $this->mobile_pedagogue = $mobile;
            }
        }

        function set_mdp_pedagogue($mdp){
            if(!empty($mdp)){
                $this->mdp_pedagogue = $mdp;
            }
        }

    }

?>