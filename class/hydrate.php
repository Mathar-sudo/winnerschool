<?php 

    trait hydrate{

        public function __construct($valeurs = []){

            if (!empty($valeurs)) // Si on a spécifié des valeurs, alors on hydrate l'objet.
            {
                $this->hydrate($valeurs);
            }
            
        }

        public function hydrate(array $donnees){

            // Chaque champ est lu
            foreach ($donnees as $clef => $donnee) 
            {
                // On récupère le nom du setter correspondant à l'attribut de la classe.
                $methode = 'set_'.$clef;
                // Si le setter correspondant existe.
                if (method_exists($this, $methode))
                {
                    // On appelle le setter.
                    $this->$methode($donnee);
                }

            }
            
        }

    }

?>