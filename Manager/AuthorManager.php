<?php

require_once "AbstractManager.php";
require_once __DIR__ . "/../models/Author.php";

class AuthorManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    // Récupère tous les auteurs
    public function findAll(): array
    {
        $sql = "SELECT * FROM authors";
        $stmt = $this->db->query($sql);

        $authors = [];
        while ($authorData = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $authors[] = new Author(
                $authorData['first_name'],
                $authorData['last_name'],
                $authorData['biography'],
                $authorData['id']
            );
        }

        return $authors;
    }

    // Récupère un auteur par son ID
    public function findOne(int $id): ?Author
    {
        $sql = "SELECT * FROM authors WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $authorData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($authorData) {
            return new Author(
                $authorData['first_name'],
                $authorData['last_name'],
                $authorData['biography'],
                $authorData['id']
            );
        }

        return null;
    }
}