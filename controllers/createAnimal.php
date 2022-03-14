<?php

include('../models/animaux.php');
include('../models/races.php');
include('../models/bdd.php');





$animaux = new Animaux();
$animaux->setNom($_POST['nom']);
$animaux->setCouleur($_POST['couleur']);
$animaux->setIdRace($_POST['idRace']);


$animaux->createOne();



echo' Votre animal : '.$_POST['nom'].' a bien été ajouté </br>';

include("../views/vueRetourIndex.php"); 





?>




    