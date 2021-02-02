<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Table responsable
    class Responsable {

        // Attributs
        private $id_responsable;
        private $nom_responsable;
        private $prenom_responsable;
        private $adresse_responsable;
        private $cdp_responsable;
        private $ville_responsable;
        private $fixe_responsable;
        private $mobile_responsable;
        private $mail_responsable;
        private $mdp_responsable;

        use hydrate;

        // Getters
        function get_id_responsable():int{
            return $this->id_responsable;
        }
        function get_nom_responsable():String{
            return $this->nom_responsable;
        }
        function get_prenom_responsable():String{
            return $this->prenom_responsable;
        }
        function get_adresse_responsable():String{
            return $this->adresse_responsable;
        }
        function get_cdp_responsable():int{
            return $this->cdp_responsable;
        }
        function get_ville_responsable():String{
            return $this->ville_responsable;
        }
        function get_fixe_responsable():String{
            return $this->fixe_responsable;
        }
        function get_mobile_responsable():String{
            return $this->mobile_responsable;
        }
        function get_mail_responsable():String{
            return $this->mail_responsable;
        }
        function get_mdp_responsable():String{
            return $this->mdp_responsable;
        }

        // Setters
        function set_id_responsable($id){
            if(!empty($id)){
                $this->id_responsable = $id;
            }
        }

        function set_nom_responsable($nom){
            if(!empty($nom)){
                $this->nom_responsable = $nom;
            }
        }
        function set_prenom_responsable($prenom){
            if(!empty($prenom)){
                $this->prenom_responsable = $prenom;
            }
        }

        function set_adresse_responsable($adresse){
            if(!empty($adresse)){
                $this->adresse_responsable = $adresse;
            }
        }
        function set_cdp_responsable($cdp){
            if(!empty($cdp)){
                $this->cdp_responsable = $cdp;
            }
        }

        function set_ville_responsable($ville){
            if(!empty($ville)){
                $this->ville_responsable = $ville;
            }
        }
        function set_fixe_responsable($fixe){
            if(!empty($fixe)){
                $this->fixe_responsable = $fixe;
            }
        }

        function set_mobile_responsable($mobile){
            if(!empty($mobile)){
                $this->mobile_responsable = $mobile;
            }
        }
        function set_mail_responsable($mail){
            if(!empty($mail)){
                $this->mail_responsable = $mail;
            }
        }

        function set_mdp_responsable($mdp_responsable){
            if(!empty($mdp_responsable)){
                $this->mdp_responsable = $mdp_responsable;
            }
        }
        

    }

?>