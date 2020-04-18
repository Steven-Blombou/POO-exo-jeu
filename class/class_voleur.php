<?php

require_once('class_personnage.php');

class Voleur extends Personnage {
  // private $_intelligence;
  // private $_discretion;
  private $_sabotage;


    public function __construct ($nomPersonnage) {
        parent::__construct($nomPersonnage);
        $this->_sabotage = 250;
    }

    public function getpointSabotage(){
      return $this->_sabotage;
    }

    public function parler() {
      echo 'Je suis un Voleur ! <br>';
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
      echo ("- Son pouvoir de sabotage est de  : ".$this->_sabotage."<br>");
      echo ("======================================<br></center>");
    }



}



?>
