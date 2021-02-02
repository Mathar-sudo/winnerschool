<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Table eleve
    class Eleve {

        // Attributs
        private $id_eleve;
        private $prenom_eleve;
        private $nom_eleve;
        private $age_eleve;
        private $mobile_eleve;
        private $mail_eleve;
        private $etablissement_eleve;
        private $particularite_eleve;
        private $mdp_eleve;
        private $fk_id_responsable;
        private $fk_id_classe;
        

        use hydrate;

        // Getters
        function get_id_eleve():int{
            return $this->id_eleve;
        }
        function get_prenom_eleve():String{
            return $this->prenom_eleve;
        }
        function get_nom_eleve():String{
            return $this->nom_eleve;
        }
        function get_age_eleve():int{
            return $this->age_eleve;
        }

        function get_mobile_eleve():int{
            return $this->mobile_eleve;
        }
        function get_mail_eleve():String{
            return $this->mail_eleve;
        }
        function get_etablissement_eleve():String{
            return $this->etablissement_eleve;
        }
        function get_particularite_eleve():String{
            return $this->particularite_eleve;
        }
        function get_mdp_eleve():String{
            return $this->mdp_eleve;
        }
        function get_fk_id_responsable():int{
            return $this->fk_id_responsable;
        }
        function get_fk_id_classe():int{
            return $this->fk_id_classe;
        }

        // Setters
        function set_id_eleve($id){
            if(!empty($id)){
                $this->id_eleve = $id;
            }
        }

        function set_prenom_eleve($prenom){
            if(!empty($prenom)){
                $this->prenom_eleve = $prenom;
            }
        }
        function set_nom_eleve($nom){
            if(!empty($nom)){
                $this->nom_eleve = $nom;
            }
        }

        function set_age_eleve($age){
            if(!empty($age)){
                $this->age_eleve = $age;
            }
        }
        function set_mobile_eleve($mobile){
            if(!empty($mobile)){
                $this->mobile_eleve = $mobile;
            }
        }

        function set_mail_eleve($mail){
            if(!empty($mail)){
                $this->mail_eleve = $mail;
            }
        }
        function set_etablissement_eleve($etablissement){
            if(!empty($etablissement)){
                $this->etablissement_eleve = $etablissement;
            }
        }

        function set_particularite_eleve($particularite){
            if(!empty($particularite)){
                $this->particularite_eleve = $particularite;
            }
        }
        function set_mdp_eleve($mdp){
            if(!empty($mdp)){
                $this->mdp_eleve = $mdp;
            }
        }

        function set_fk_id_responsable($fk_id_responsable){
            if(!empty($fk_id_responsable)){
                $this->fk_id_responsable = $fk_id_responsable;
            }
        }
        function set_fk_id_classe($fk_id_classe){
            if(!empty($fk_id_classe)){
                $this->fk_id_classe = $fk_id_classe;
            }
        }

    }

?>