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
  $this->_life = 150;
  $this->_force = 200;
  $this->_magie = 0;
  $this->_experience = 0;
  $this->_degat = 0;
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

public function parler() {
  echo 'Je suis un guerrier ! <br>';
}

public function gagnerExperience() {
  $this->_experience =   $this->_experience +10;
  echo 'Le guerrier viens de gagner de l experience ! ';
  echo  $this->_experience;
  echo '<br>';
}





}


 ?>
