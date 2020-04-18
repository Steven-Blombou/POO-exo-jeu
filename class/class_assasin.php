<?php

require_once('class_personnage.php');

class Assasin extends Personnage {
  private $_agilité;
  // private $_precision;
  // private $_reflexe;


    public function __construct ($nomPersonnage) {
        parent::__construct($nomPersonnage);
        $this->_agilité = 250;
    }

    public function getpointAgilité(){
      return $this->_agilité;
    }

    public function parler() {
  echo 'Je suis un assasin ! <br>';
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
      echo ("- Son agilité est de  : ".$this->_agilité."<br>");
      echo ("======================================<br></center>");
    }



}



?>
