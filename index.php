<?php
require_once('class_guerrier.php');

$guerrier = new Guerrier('Kratos');
$guerrier-> parler();
$guerrier-> gagnerExperience();
$guerrier-> afficherExperience();
$guerrier-> afficherDegat();

$guerrier2 = new Guerrier('King Lothric');
$guerrier2-> parler();

$i=0;
while(($guerrier->getLife()>0) && ($guerrier2->getLife()>0)) {
  $i=$i+1;
  echo 'tour'.$i;
  echo '<br>';

  $guerrier-> frapperAdversaire($guerrier2);
  $guerrier2-> frapperAdversaire($guerrier);
  $guerrier-> afficher();
  $guerrier2-> afficher();

}

if($guerrier->getLife()<=0) {
  echo $guerrier2->getNom(). ' a battu '.$guerrier->getNom();

}else {
  echo $guerrier2->getNom(). ' a été battu par '.$guerrier->getNom();
}

 ?>
