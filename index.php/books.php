<?php 

class Book {
    private ?int $id = null;
    private string $title;
    private string $excerpt;
    private int $author;
    private float $price;

    // Constructeur
    public function __construct(string $title, string $excerpt, int $author, float $price, ?int $id = null) {
        $this->id = $id;
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->author = $author;
        $this->price = $price;
    }

    // Getters
    public function getId(): ?int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getExcerpt(): string {
        return $this->excerpt;
    }

    public function getAuthor(): int {
        return $this->author;
    }

    public function getPrice(): float {
        return $this->price;
    }

    // Setters
    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function setTitle(string $title): void {
        $this->title = $title;
    }

    public function setExcerpt(string $excerpt): void {
        $this->excerpt = $excerpt;
    }

    public function setAuthor(int $author): void {
        $this->author = $author;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }
}