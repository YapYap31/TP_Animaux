<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afficher un animal</title>
</head>
<body>

    <form action="#"  method="POST">
        <label for="pet-select">Selectionner l' animal a afficher</label>
        <select name="pets" id="pet-select">
            <option value="">--Nom de l'animal--</option>

            <?php
            include("../models/animaux.php");
            include("../models/bdd.php");

                $animaux = new Animaux();        
                $allAnimaux = $animaux->readAll();
                
                while($donnees = $allAnimaux->fetch()){
                    echo '<option value='.$donnees["nom"].'>'.$donnees["nom"].'</option>';
                }
                
            ?>
        </select>

        <input type="submit" name="" id="" value="Valider">
        
    </form>
    <?php
        if (isset($_POST['pets'])){

            $allAnimaux = $animaux->readAll();
            // var_dump($animaux);
            // echo $animaux;

            while($donnees = $allAnimaux->fetch()){
                
                if ($_POST['pets'] ==$donnees["nom"]){
                    echo 'L\'animal que vous avez choisi est: </br>
                '.$donnees["nom"].',</br> de couleur '.$donnees["couleur"].',</br> et de race '.$donnees["id_race"].'.';
                }
                // $lecture = $animaux->getnom();
                // echo "</br></br></br>";
                // var_dump($lecture);
            }
            

        }
     
    ?>
</body>
</html>
