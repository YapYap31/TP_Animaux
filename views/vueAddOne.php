<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter un animal</title>
</head>
<body>
    <form action="../controllers/createAnimal.php"  method="POST">
        <label for="nom">nom d'animal</label>
        <input type="text" name="nom" id="nom">

        <label for="couleur">couleur d'animal</label>
        <input type="text" name="couleur" id="couleur">

        <label for="idRace">choix race</label>
        <select name="idRace" id="idRace">
            <option value="">--Choisir la race--</option>

            <?php
            include("../models/animaux.php");
            include("../models/races.php");
            include("../models/bdd.php");


            $races = new Races();        
            $allRaces = $races->readAll(); 

            while($donnees = $allRaces->fetch()){
                echo '<option value='.$donnees["id_race"].'>'.$donnees["nom_race"].'</option>';
            }
                
            ?>
        </select>

        <input type="submit" name="" id="" value="Valider">
    </form>


    
</body>
</html>