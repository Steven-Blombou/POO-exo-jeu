<?php

require_once('class_personnage.php');

class Ogre extends Personnage {
  private $_pointRage;
  // private $_survie;

    public function __construct ($nomPersonnage) {
        parent::__construct($nomPersonnage);
        $this->_pointRage = 650;
    }

    public function getpointRage(){
      return $this->_pointRage;
    }

    public function parler() {
      echo 'Je suis un Ogre ! <br>';
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
      echo ("- Sa rage est de  : ".$this->_pointRage."<br>");
      echo ("======================================<br></center>");
    }



}



?>
