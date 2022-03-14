<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE UN ANIMAL</title>
</head>
<body>

<!-- method POST = sécurisé -->
<form action="../controllers/updateAnimal.php" method="POST">
    <label for="idAnimal">ID d'animal à modifier</label>
    <input type="number" minlength="1" name="idAnimal" id="idAnimal">

    <label for="nom">Nom d'animal</label>
    <input type="text" minlength="4" name="nom" id="nom">

    <label for="couleur">Couleur d'animal</label>
    <input type="text" minlength="4" name="couleur" id="couleur">

    <label for="race">Race d'animal</label>
    <!-- type number car liste de chiffres -->
    <input type="number" name="race" id="race">


    <input type="submit" name="" id="" value="Valider">
</form>

    
</body>
</html>