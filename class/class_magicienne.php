<?php

require_once('class_personnage.php');

class Magicienne extends Personnage {
  private $_magie;
  // private $_objet;
  // private $_connaissance;



    public function __construct ($nomPersonnage) {
        parent::__construct($nomPersonnage);
        $this->_magie = 250;
    }

    public function getpointMagie(){
      return $this->_magie;
    }

    public function parler() {
      echo 'Je suis une Magicienne ! <br>';
      echo 'je me nomme ';
      echo $this->_nomPersonnage;
      echo '<br>';
    }

    public function lancerUnSort($personnage) {
      $perso->recevoirDesDegats($this->_magie);
    }

    public function affiche() {
      echo ("<center>======================================<br>");
      echo ("Personnage Crée du nom de : ".$this->_nomPersonnage." <br><br> Ses Caractéristiques sont : <br>");
      echo ("- Nombre de Point D'attaque : ".$this->_pointDAttaque."<br>");
      echo ("- Nombre de Point De Défense : ".$this->_pointDeDefense."<br>");
      echo ("- Nombre de Point de Vie : ".$this->_pointDeVie."<br>");
      echo ("- Son pouvoir magique est de  : ".$this->_magie."<br>");
      echo ("======================================<br></center>");
    }



}



?>
