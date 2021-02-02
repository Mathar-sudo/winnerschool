<?php 

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Table intervenant
    class Intervenant {

        // Attributs
        private $id_intervenant;
        private $nom_intervenant;
        private $prenom_intervenant;
        private $adresse_intervenant;
        private $cdp_intervenant;
        private $ville_intervenant;
        private $fixe_intervenant;
        private $mobile_intervenant;
        private $mail_intervenant;
        private $casier_intervenant;
        private $photo1_intervenant;
        private $photo2_intervenant;
        private $niveau_intervenant;
        private $specialite_intervenant;
        private $profession_intervenant;
        private $experience_intervenant;
        private $connaissance_intervenant;
        private $mdp_intervenant;

        use hydrate;

        // Getters
        function get_id_intervenant():int{
            return $this->id_intervenant;
        }

        function get_nom_intervenant():String{
            return $this->nom_intervenant;
        }

        function get_prenom_intervenant():String{
            return $this->prenom_intervenant;
        }

        function get_adresse_intervenant():String{
            return $this->adresse_intervenant;
        }

        function get_cdp_intervenant():int{
            return $this->cdp_intervenant;
        }

        function get_ville_intervenant():String{
            return $this->ville_intervenant;
        }

        function get_fixe_intervenant():String{
            return $this->fixe_intervenant;
        }

        function get_mobile_intervenant():String{
            return $this->mobile_intervenant;
        }

        function get_mail_intervenant():String{
            return $this->mail_intervenant;
        }

        function get_casier_intervenant():String{
            return $this->casier_intervenant;
        }

        function get_photo1_intervenant():String{
            return $this->photo1_intervenant;
        }

        function get_photo2_intervenant():String{
            return $this->photo2_intervenant;
        }

        function get_niveau_intervenant():String{
            return $this->niveau_intervenant;
        }

        function get_specialite_intervenant():String{
            return $this->specialite_intervenant;
        }

        function get_profession_intervenant():String{
            return $this->profession_intervenant;
        }

        function get_experience_intervenant():String{
            return $this->experience_intervenant;
        }

        function get_connaissance_intervenant():String{
            return $this->connaissance_intervenant;
        }

        function get_mdp_intervenant():String{
            return $this->mdp_intervenant;
        }

        // Setters
        function set_id_intervenant($id){
            if(!empty($id)){
                $this->id_intervenant = $id;
            }
        }

        function set_nom_intervenant($nom){
            if(!empty($nom)){
                $this->nom_intervenant = $nom;
            }
        }

        function set_prenom_intervenant($prenom){
            if(!empty($prenom)){
                $this->prenom_intervenant = $prenom;
            }
        }

        function set_adresse_intervenant($adresse){
            if(!empty($adresse)){
                $this->adresse_intervenant = $adresse;
            }
        }

        function set_cdp_intervenant($cdp){
            if(!empty($cdp)){
                $this->cdp_intervenant = $cdp;
            }
        }

        function set_ville_intervenant($ville){
            if(!empty($ville)){
                $this->ville_intervenant = $ville;
            }
        }

        function set_fixe_intervenant($fixe){
            if(!empty($fixe)){
                $this->fixe_intervenant = $fixe;
            }
        }

        function set_mobile_intervenant($mobile){
            if(!empty($mobile)){
                $this->mobile_intervenant = $mobile;
            }
        }

        function set_mail_intervenant($mail){
            if(!empty($mail)){
                $this->mail_intervenant = $mail;
            }
        }

        function set_casier_intervenant($casier){
            if(!empty($casier)){
                $this->casier_intervenant = $casier;
            }
        }

        function set_photo1_intervenant($photo1){
            if(!empty($photo1)){
                $this->photo1_intervenant = $photo1;
            }
        }

        function set_photo2_intervenant($photo2){
            if(!empty($photo2)){
                $this->photo2_intervenant = $photo2;
            }
        }

        function set_niveau_intervenant($niveau){
            if(!empty($niveau)){
                $this->niveau_intervenant = $niveau;
            }
        }

        function set_specialite_intervenant($specialite){
            if(!empty($specialite)){
                $this->specialite_intervenant = $specialite;
            }
        }

        function set_profession_intervenant($profession){
            if(!empty($profession)){
                $this->profession_intervenant = $profession;
            }
        }

        function set_experience_intervenant($experience){
            if(!empty($experience)){
                $this->experience_intervenant = $experience;
            }
        }

        function set_connaissance_intervenant($connaissance){
            if(!empty($connaissance)){
                $this->connaissance_intervenant = $connaissance;
            }
        }

        function set_mdp_intervenant($mdp){
            if(!empty($mdp)){
                $this->mdp_intervenant = $mdp;
            }
        }

    }

?>