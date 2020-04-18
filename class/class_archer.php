<?php

require_once('class_personnage.php');

class Archer extends Personnage {
  private $_vitesseDeTir;
  // private $_precision;
  // private $_dexterité;

    public function __construct ($nomPersonnage) {
        parent::__construct($nomPersonnage);
        $this->_vitesseDeTir = 250;
    }

    public function getvitesseDeTir(){
      return $this->_vitesseDeTir;
    }

    public function parler() {
  echo 'Je suis un Archer ! <br>';
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
      echo ("- Sa vitesse de tir est de  : ".$this->_vitesseDeTir."<br>");
      echo ("======================================<br></center>");
    }




}



?>
