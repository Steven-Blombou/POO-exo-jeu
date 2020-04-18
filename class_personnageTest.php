<?php
  class Magicienne extends Personnage {
    private $_magie;
    private $_objet;
    private $_connaissance;

    public function lancerUnSort($personnage) {
      $perso->recevoirDesDegats($this->_magie);
    }

    }
  
  class Guerrier extends Personnage {
    private $_force;
    private $_courage;
    private $_esquive;
    public function lancerUneAttaque($personnage) {
      $perso->recevoirDesDegats($this->_force);
    }
    public function gagnerExperience() {
      parent::gagnerExperience();
      if($this->_magie < 100) {
        $this->_magie +-15;
      }
    }
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

  public function gagnerExperience() {
    $this->_experience =   $this->_experience +10;
  }

  public function recevoirDesDegats()
    {
      $this->_degats rand(0,2100)

      // Si on a 100 de dégâts ou plus, on dit que le personnage a été tué.
      if ($this->_degats >= 2000)
      {
        return self::PERSONNAGE_TUE;
      }

      // Sinon, on se contente de dire que le personnage a bien été frappé.
      return self::PERSONNAGE_FRAPPE;
    }

  public function jeuxDeDes() {
      $var= rand(1,6);
      return $var;
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
