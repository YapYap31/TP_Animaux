<?php
include("../models/bdd.php");
include("../models/animaux.php");
// Ce include permet de afficher le titre qui apparait aussi sur la page getAll.php
include("../views/zoo.php");

// On instancie un objet Animaux vide pour pouvoir recuperer toutes les methodes
$animaux = new Animaux();
// On utilise la méthode readAll() de "animaux.php" qui permet de récupérer les éléments de la base de données
$allAnimaux = $animaux->readAll();


while($donnees = $allAnimaux->fetch()){
    
    echo "<h4>   ".$donnees["nom"]."</h4>";
}

echo "<h3>Quel animal souhaitez vous supprimer?</h3>";
?>

<!-- formulaire pour inscrire animal a supprimer qui redirige sur deleteAnimal2 en methode POST-->
<form action="deleteAnimal2.php" method="POST">
    <label for="nom">nom d'animal</label>
    <input type="text" name="nom" id="nom">
    <input type="submit" value="valider">
</form>
