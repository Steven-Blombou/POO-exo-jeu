<?php

require_once('class_personnage.php');

class Nain extends Personnage {
  // private $_memoire;
  private $_intelligence;
  // private $_mecanique;


    public function __construct ($nomPersonnage) {
        parent::__construct($nomPersonnage);
        $this->_intelligence = 250;
    }

    public function getpointIntelligence(){
      return $this->_intelligence;
    }

    public function parler() {
      echo 'Je suis un Nain ! <br>';
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
      echo ("- Son intelligence est de  : ".$this->_intellignece."<br>");
      echo ("======================================<br></center>");
    }



}



?>
