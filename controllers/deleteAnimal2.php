<?php
include("../models/animaux.php");
include("../models/bdd.php");

// enregistrement de la donnee "nom grace a la methode POST
$nom = $_POST['nom'];

// faire defiler tout les animaux de la base de donnes
$animaux = new Animaux();
$allAnimaux = $animaux->readAll();
while($donnees = $allAnimaux->fetch()){
    // Si la donné enregistrer = le nom de l animal qui defile
    // on fait un echo, on utilise la fonction deleteOne pour supprimer et on redirige vers la liste
    if ($nom == $donnees["nom"]){
        echo 'L\'animal '.$donnees["nom"].' a été supprimé.';
        // $animaux->setidAnimal($donnees["id_animal"]);
        // $animaux->deleteOne();
        $animaux->deleteOne($donnees["id_animal"]);
        header('Location: getAll.php');
        

    }
}

include("../views/vueRetourIndex.php");

?>