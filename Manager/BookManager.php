<?php

require "AbstractManager.php";
require_once __DIR__ . "/../models/Book.php";

class BookManager extends AbstractManager
{
    public function __construct()
    {
        parent::__construct();
    }

    // Récupère tous les livres
    public function findAll(): array
    {
        $sql = "SELECT * FROM books";
        $stmt = $this->db->query($sql);

        $books = [];
        while ($bookData = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $books[] = new Book(
                $bookData['title'],
                $bookData['excerpt'],
                (float)$bookData['price'],
                (int)$bookData['author'], // ID de l'auteur
                $bookData['id'] // Optionnel si l'ID est utilisé
            );
        }

        return $books;
    }

    // Récupère un livre par son ID
    public function findOne(int $id): ?Book
    {
        $sql = "SELECT * FROM books WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $bookData = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($bookData) {
            return new Book(
                $bookData['title'],
                $bookData['excerpt'],
                (float)$bookData['price'],
                (int)$bookData['author'], // ID de l'auteur
                $bookData['id']
            );
        }

        return null;
    }
}