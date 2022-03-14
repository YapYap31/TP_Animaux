<!-- La page updateAnimal.php va permettre de Modifier un animal dont on a déjà l'ID, sinon ça marchera pas -->

<!-- On va lier les pages animaux.php et bdd.php sur cet page avec des include -->
<!-- rappel : la page animaux.php contient toutes les méthodes dont on aura besoin -->
<!-- rappel : la page bdd.php permet de se connecter à la base de données -->
<!-- rappel : la page vueRetourIndex.php permet de rajouter le bouton pour revenir à l'accueil -->
<?php
include('../models/animaux.php');
include('../models/bdd.php');

// if(isset($_POST['nom']
// )&& isset($_POST['couleur']))

// var_dump($_POST);

// Ici on va faire appel à la superglobale $_POST qui permet de récupérer tous les input dans un formulaire
// On va affecter ce qu'on a récupéré dans des nouvelles variables ex : $nouvelleCouleur
$idAnimal = $_POST['idAnimal'];
$nouveauNom = $_POST['nom'];
$nouvelleCouleur = $_POST['couleur'];
$nouvelleRace = $_POST['race'];

// On instancie un objet Animaux pour pouvoir utiliser toutes les fonctionnalités de la page animaux.php (attributs, fonctions...). 
// Ca correspond au nom de la class Animaux dans le fichier animaux.php
$animaux = new Animaux();

// Dans la variable $animaux qu'on vient de créer, on va appliquer différentes méthodes qu'on retrouve dans animaux.php
$animaux->setNom($nouveauNom);
$animaux->setCouleur($nouvelleCouleur);
$animaux->setIdRace($nouvelleRace);
$animaux->updateOne($idAnimal);


// On va afficher ceci à l'utilisateur pour lui montrer que sa modif a bien fonctionné
echo "Votre animal ".$_POST['nom']." a bien été modifié !</br></br>";
include("../views/vueRetourIndex.php");


// Le header permet de rediriger vers la page d'accueil index.php (ce n'est pas obligatoire)
// header('Location: ../index.php');

// Le exit() permet de terminer le script
exit();

?>