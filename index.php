<?php

require_once('class/class_guerrier.php');
require_once('class/class_ogre.php');
echo "<br><br><center><h1>Le Pif dans ta Gueule</h1></center>";
echo "<b>Les règles sont les suivantes :</b> <br>";
echo "- deux joueurs s'affronte, chaque joueur dispose d'un nombre de point de vie, d'un nombre de point d'attaque, et un nombre de point de défense.<br>";
echo "- Un des est lancé par chaque joueur pour savoir qui commence. Le plus grand commence.<br>";
echo "- Le joueur lance un des, si résultat supérieur à 3 alors, sont attaque est doublé, et il attaque ensuite l'adversaire.<br>";
echo "- Jeux en tour par tour.<br>";
echo "- Le joueur qui perd est le premier qui n'a plus de vie.<br>";

echo ("<center><br><br>======================================<br>");
echo "A vous de jouer !<br>";
echo ("======================================<br></center>");

// Entrer un nom de joueur J1
// $nomPersonnage1 = 'Kratos';
$joueur1 = new Guerrier("Kratos");
$joueur1->affiche();
echo $var1 = $joueur1->getnomPersonnage();
echo "<br>".$var2 = $joueur1 ->getpointDeDefense();
echo "<br>".$var3 = $joueur1 ->getpointDAttaque();
echo "<br>".$var4 = $joueur1 ->getpointDeVie();
echo "<br>".$var5 = $joueur1 ->getpointBouclier();
// $joueur1->parler();


// Entrer un nom de joueur J2
// $nomPersonnage2 = 'Ezekiel';
$joueur2 = new Ogre("Ezekiel");
$joueur2->affiche();
echo $var1 = $joueur2->getnomPersonnage();
echo "<br>".$var12 = $joueur2->getpointDeDefense();
echo "<br>".$var13 = $joueur2->getpointDAttaque();
echo "<br>".$var14 = $joueur2->getpointDeVie();
echo "<br>".$var15 = $joueur2->getpointRage();
// $joueur2->parler();
echo ("<center><br><br>======================================<br>");
echo "<br>  Aller on lancer la partie !!!!!! A qui de commencer ? <br><br> ";
echo ("======================================<br></center>");


do{
  echo "lancer de des du joueurs 1<br>";
  $des1 = $joueur1->jeuxDeDes();
  echo "lancer de des du joueurs 2<br>";
  $des2 = $joueur2->jeuxDeDes();
  echo "Résultat : J1 = ".$des1." , J2 = ".$des2." <br><br>";

  if ($des1>$des2){
    echo ("<center><br><br>======================================<br>");
    echo "<br>  Le Joueur 1 Commence <br><br> ";
    echo ("======================================<br></center>");
    $aquidejouer = 0;
  }else if ($des1<$des2){
    echo ("<center><br><br>======================================<br>");
    echo "<br>  Le joueur 2 Commence <br><br> ";
    echo ("======================================<br></center>");
    $aquidejouer = 1;
  }else {
    echo "Le lancé de des est équivalent, on recommence <br><br>";
  }


} while ($des1 == $des2);

$i=1;
$j=1;
$nbtour=1;
while(($joueur1->getpointDeVie() > 0) && ($joueur2->getpointDeVie() > 0) && ($nbtour<=30) ){
if ($aquidejouer <= 0){
  echo "<br><br>========================<br>";
  echo "Tour n°".$i." Joueur 1 :";
  echo "<br>========================<br><br>";
  // Est-ce qu'on double les points d'attaques
  $pointattaque = $joueur1->getpointDAttaque();
  $pointattaque = $joueur1->doubleattaque($pointattaque);
  $joueur2->recevoirAttaque($pointattaque);
  $i++;
  $aquidejouer = $aquidejouer +1;
  echo"<br>";
}else{
  echo "<br><br>========================<br>";
  echo "Tour n°".$j." Joueur 2 :";
  echo "<br>========================<br><br>";

  // Est-ce qu'on double les points d'attaques
  $pointattaque = $joueur2->getpointDAttaque();
  $pointattaque = $joueur2->doubleattaque($pointattaque);
  $joueur1->recevoirAttaque($pointattaque);
    $aquidejouer = $aquidejouer -1;
  $j++;
  echo"<br>";
}
}

if($joueur1->getpointDeVie() <= 0){
  echo "<center><br><br>========================<br>";
  echo "LE JOUEUR N° 2 A GAGNER !!!!!!:";
  echo "<br>========================<br><br></center>";
}else if ($joueur2->getpointDeVie() <= 0) {
  echo "<center><br><br>========================<br>";
  echo "LE JOUEUR N° 1 A GAGNER !!!!!!:";
  echo "<br>========================<br><br></center>";

}else {
  echo "<center><br><br>========================<br>";
  echo "Les joueurs puent la merde, ils sont trop faible pour finir ce jeux en 50 tours !!!!!!:";
  echo "<br>========================<br><br></center>";


}

?>
