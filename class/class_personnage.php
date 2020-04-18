<?php

class Personnage
{
// Declaration de variable
  private $_nomPersonnage;
  private $_pointDeDefense;
  private $_pointDAttaque;
  private $_pointDeVie;

  //Initialisation de notre Classe
  public function __construct( $nomPersonnage ) {
    $this->_nomPersonnage = $nomPersonnage;
    $this->_pointDeDefense = rand(0,2100);
    $this->_pointDAttaque =  rand(0,2100);
    $this->_pointDeVie =  2000;
  }

  public function getnomPersonnage(){
    return $this->_nomPersonnage;
  }

  public function getpointDeDefense(){
    return $this->_pointDeDefense;
  }

  public function getpointDAttaque(){
    return $this->_pointDAttaque;
  }

  public function getpointDeVie(){
    return $this->_pointDeVie;
  }

  public function setpointDeVie($pointDeVie){
      $this->_pointDeVie = $pointDeVie;
  }

  public function jeuxDeDes() {
      $var= rand(1,6);
      return $var;
  }

  public function parler() {
    echo 'Je suis un personnage aventurier ! <br>';
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
      echo ("======================================<br></center>");
  }

  public function doubleattaque($pointdattaque){
      $des = $this->jeuxDeDes();
      echo"<br>Le joueur jette son des <br>";
      if($des>3){
        $pointdattaque=$pointdattaque*2;
        echo"<br>Super Le joueur a doublé son attaque pour ce tour, car il a effectué un dés de : ".$des."<br>";
      }else{
        echo"<br>Le joueur ne double pas son attaque, car il a effectué un dés de : ".$des."<br>";
      }
      return $pointdattaque;
  }

  public function recevoirAttaque($pointdattaque){
      $pointdattaque= $pointdattaque - $this->_pointDeDefense;
      if($pointdattaque > 0){
        $this->_pointDeVie = $this->_pointDeVie - $pointdattaque;
        echo "Ouch, j'ai pris cher, j'ai reçu une attaque : <br> Point de vie enlevé : ".$pointdattaque."<br> Point de Vie restant  au joueur adverse :".$this->_pointDeVie;
      }else {
        echo "j'ai trop de défense, t'es trop nul";
      }

  }
}
?>
