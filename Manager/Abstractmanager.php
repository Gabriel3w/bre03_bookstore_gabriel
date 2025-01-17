<?php


abstract class AbstractManager
{
    
    protected $db;

    
    public function __construct()
    {
        try {

            $host = "db.3wa.io";
            $port = "3306";
            $dbname = "hugotande_bookstore";
            $username = 'hugotande';
            $password = '41cebb5ac29e53ec4615efc7252da9de';


            $this->db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {

            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }
}