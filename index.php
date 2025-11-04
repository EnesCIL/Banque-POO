<?php
include "CompteBancaire.php";
include "Titulaire.php";

$titulaire = new Titulaire("SMAIL", "Stéphane", "10/02/2003", "Mulhouse");
$compte = new CompteBancaire("compte courant", 5123, "£",$titulaire);
$compte2 = new CompteBancaire("livret A", 3514, "£", $titulaire);

var_dump($compte);
$compte->compteDebiter(5124);
var_dump($compte);

$compte->compteVirement()


// echo $titulaire->afficherComptes()
?>