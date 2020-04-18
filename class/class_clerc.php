<?php

require_once('class_personnage.php');

class Clerc extends Personnage {
  private $_constitution;
  // private $_empathie;
  // private $_perception;


    public function __construct ($nomPersonnage) {
        parent::__construct($nomPersonnage);
        $this->_constitution = 250;
    }

    public function getpointConstitution(){
      return $this->_constitution;
    }

    public function parler() {
      echo 'Je suis un Clerc ! <br>';
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
      echo ("- Ses point de constitution sont de  : ".$this->_constitution."<br>");
      echo ("======================================<br></center>");
    }



}



?>
