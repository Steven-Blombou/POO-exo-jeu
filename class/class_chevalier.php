<?php

require_once('class_personnage.php');

class Chevalier extends Personnage {
  private $_armure;
  // private $_diplomatie;
  // private $_endurance;


    public function __construct ($nomPersonnage) {
        parent::__construct($nomPersonnage);
        $this->_armure = 250;
    }

    public function getpointArmure(){
      return $this->_armure;
    }

    public function parler() {
      echo 'Je suis un Chevalier ! <br>';
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
      echo ("- Son armure est de  : ".$this->_armure."<br>");
      echo ("======================================<br></center>");
    }



}



?>
