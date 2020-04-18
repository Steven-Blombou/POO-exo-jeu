<?php

require_once('class_personnage.php');

class Elf extends Personnage {
  // private $_charisme;
  // private $_magnetisme;
  private $_soin;


    public function __construct ($nomPersonnage) {
        parent::__construct($nomPersonnage);
        $this->_soin = 250;
    }

    public function getpointSoin(){
      return $this->_soin;
    }

    public function parler() {
      echo 'Je suis une Elf ! <br>';
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
      echo ("- Son pouvoirde soin est de  : ".$this->_soin."<br>");
      echo ("======================================<br></center>");
    }



}



?>
