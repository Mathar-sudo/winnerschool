<?php

    $emplacement_actuel = dirname(__FILE__);
    require_once($emplacement_actuel . '/../fonction/autoload.php');

    // Connexion à la base de données
    class Connexion_bdd {
        
        private $bdd;
        public $tabResultat;
    
        public function __construct(){

            try{
                $this->bdd = new PDO('mysql:host=localhost; dbname=winnerschool; charset=utf8', 'root', '');
            } catch (Exception $e){
                die($e->getMessage());
            }

        }
        
        public function doQuery($sql, array $valeurs){

            try{
                $query = $this->bdd->prepare($sql);
                $exec = $query->execute($valeurs);
                if($exec){
                    $this->tabResultat = $query->fetchAll(PDO::FETCH_ASSOC);
                }
            } catch (Exception $e){
                die($e->getMessage());
            }
            
            return $exec;

        }

        function genererChaineAleatoire($longueur){
            $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $longueurMax = strlen($caracteres);
            $chaineAleatoire = '';
            for ($i = 0; $i < $longueur; $i++){
                $chaineAleatoire .= $caracteres[rand(0, $longueurMax - 1)];
            }
            return $chaineAleatoire;
        }

    }

?>