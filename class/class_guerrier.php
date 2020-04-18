<?php

require_once('class_personnage.php');

class Guerrier extends Personnage {
    private $_bouclier;
    // private $_force;
    // private $_courage;
    // private $_esquive;


    public function __construct ($nomPersonnage) {
        parent::__construct($nomPersonnage);
        $this->_bouclier = 50;
    }

    public function getpointBouclier(){
      return $this->_bouclier;
    }

    public function parler() {
      echo 'Je suis un guerrier ! <br>';
      echo 'je me nomme ';
      echo $this->_nomPersonnage;
      echo '<br>';
    }

    public function affiche() {
      echo ("<center>======================================<br>");
      echo ("Personnage Crée du nom de : ".$this->_nomPersonnage." <br><br> Ses Caractéristiques sont : <br>");
      echo ("- Nombre de Point D'attaque : ".$this->_pointDAttaque."<br>");
      echo ("- Nombre de Point De Défense : ".$this->_pointDeDefense."<br>");
      echo ("- Nombre de Point de Vie : ".$this->_pointDeVie."<br>");
      echo ("- Son bouclier est de  : ".$this->_bouclier."<br>");
      echo ("======================================<br></center>");
    }



}



?>
