<?php
// Classe qui represente le joueur

class Guerrier {
// Declaration des variables
    private $_nom;
    private $_life;
    private $_force;
    private $_magie;
    private $_experience;
    private $_degat;




//  Init de la class

public function __construct($nom) {
  echo 'Le constructeur a bien été crée ! <br>';
  $this->_nom = $nom;
  $this->_life = 2000;
  $this->_force = 0;
  $this->_magie = 0;
  $this->_experience = 0;
  $this->_degat = rand(150,225);
}

public function getNom() {
  return $this->_nom;
}

public function getLife() {
  return $this->_life;
}

public function getForce() {
  return $this->_force;
}

public function getMagie() {
  return $this->_magie;
}

public function getExperience() {
  return $this->_experience;
}

public function getDegat() {
  return $this->_degat;
}

public function setLife($x) {
 $this->_life = $x;

}

public function parler() {
  echo 'Je suis un guerrier ! <br>';
  echo 'je me nomme ';
  echo $this->_nom;
  echo '<br>';
}

public function afficherExperience() {
  echo 'Le guerrier possede actuellement : ';
  echo $this->_experience;
  echo ' xp';
  echo '<br>';
}

public function gagnerExperience() {
  $this->_experience =   $this->_experience +10;
  echo 'Le guerrier viens de gagné de l experience ! ';
  echo  $this->_experience;
  echo ' xp';
  echo '<br>';
}

public function afficherDegat() {
  echo 'Le guerrier a encaisser actuellement : ';
  echo $this->_degat;
  echo ' points de degat';
  echo '<br>';
}

public function frapperAdversaire($adversaire) {
  $lifeEnnemis = $adversaire->getLife();
  $lifeEnnemis = $lifeEnnemis - $this->_degat;
  $adversaire->setLife($lifeEnnemis);
  echo $this->_nom." a attaqué ".$adversaire->getNom();
  echo '<br>';
}

public function afficher() {
  echo $this->_nom." a encore ".$this->_life." points de vie <br>";

}

}


 ?>
