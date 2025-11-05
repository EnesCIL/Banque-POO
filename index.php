<?php
include "CompteBancaire.php";
include "Titulaire.php";

$titulaire = new Titulaire("SMAIL", "Stéphane", "10/02/2003", "Mulhouse");
$compte = new CompteBancaire("compte courant", 200, "£",$titulaire);
$compte2 = new CompteBancaire("livret A", 200, "£", $titulaire);

echo $titulaire->afficherComptes();

// var_dump($compte);
// $compte->compteVirement(20, $compte2);
// var_dump($compte2);
// var_dump($compte);

echo $compte->compteVirement(20, $compte2)."<br>";

echo $compte->compteDebiter(10)."<br>";

echo $compte->compteDebiter(180)."<br>";

echo $compte->compteCrediter(10)."<br>";


?>