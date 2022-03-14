<?php
class Animaux
{
    //attributs
    public $idAnimal;
    public $nom;
    public $couleur;
    public $idRace;

    // attribut de stockage info de connexion BDD
    public $connect;

    // constructeur
    public function __construct()
    {
        $this->connect = new ConfigDB();
        $this->connect = $this->connect->getConnection();
    }

    public function getIdAnimal(){
        return $this->idAnimal;
    }
    public function getnom(){
        return $this->nom;
    }
    public function getcouleur(){
        return $this->couleur;
    }
    public function getidRace(){
        return $this->idRace;
    }

    public function setidAnimal($id_animal){
        $this->idAnimal = $nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setCouleur($couleur){
        $this->couleur = $couleur;
    }
    public function setIdRace($idRace){
        $this->idRace = $idRace;
    }

    // function CRUD
    public function readAll(){
        $myQuery = "SELECT * FROM animaux";
        $stmt = $this->connect->prepare($myQuery);
        $stmt->execute();
        return $stmt;
    }

    public function readSingle(){
        $myQuery = "SELECT * FROM animaux WHERE id_animal = :idAnimal ";
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(":idAnimal", $this->idAnimal);
        $stmt->execute();
        return $stmt;
    }

    public function createOne(){
        $myQuery = "INSERT INTO animaux
        SET
           nom = :nom,
           couleur = :couleur,
           id_race = :idRace";

        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(":nom", $this->nom);
        $stmt->bindParam(":couleur", $this->couleur);
        $stmt->bindParam(":idRace", $this->idRace);
    

        return $stmt->execute();
    }

    public function updateOne($idAnimal){
        $myQuery = "UPDATE animaux
        SET
           nom = :nom,
           couleur = :couleur,
           id_race = :idRace 
        WHERE
            id_animal = :idAnimal";
        
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(":nom", $this->nom);
        $stmt->bindParam(":couleur", $this->couleur);
        $stmt->bindParam(":idRace", $this->idRace);
        $stmt->bindParam(":idAnimal", $idAnimal);
        return $stmt->execute();

    }

    public function deleteOne($idAnimal){
        $myQuery = "DELETE FROM animaux 
        WHERE
            id_animal = :idAnimal";
        
        $stmt = $this->connect->prepare($myQuery);
        $stmt->bindParam(":idAnimal", $idAnimal);
        $stmt->execute();
        return $stmt;
        
    }





}
?>