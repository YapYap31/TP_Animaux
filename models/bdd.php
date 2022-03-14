<?php
class ConfigDB
{
    //attributs de la BDD
    private $host = '127.0.0.1';
    private $database_name = 'animaux';
    private $username = 'root';
    private $password = '';

    public $connect;

    // fonction de connection à la BDD
    public function getConnection()
    {
        $this->connect = null;
        try {
            $this->connect = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->database_name,
                $this->username,
                $this->password,
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
            $this->connect->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "la base de données n'est pas joignable: " . $exception->getMessage();
        }
        return $this->connect;
    }
}