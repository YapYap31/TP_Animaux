<?php
include("../models/animaux.php");
include("../models/bdd.php");
include("../views/zoo.php");

$animaux = new Animaux();


$allAnimaux = $animaux->readAll();

while($donnees = $allAnimaux->fetch()){
    echo "<h5>".$donnees["nom"]." de couleur ".$donnees["couleur"]."</h5>";
}

include("../views/vueFormDelete.php");

include("../views/vueRetourIndex.php"); 
?>