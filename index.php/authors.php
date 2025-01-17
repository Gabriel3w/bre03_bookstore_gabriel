<?php

class Author {
    private ?int $id = null;
    private string $firstname;
    private string $lastname;
    private string $biographie;

    // Constructeur
    public function __construct(string $firstname, string $lastname, string $biographie, ?int $id = null) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->biographie = $biographie;
    }

    // Getters
    public function getId(): ?int {
        return $this->id;
    }

    public function getFirstname(): string {
        return $this->firstname;
    }

    public function getLastname(): string {
        return $this->lastname;
    }

    public function getBiographie(): string {
        return $this->biographie;
    }

    // Setters
    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function setFirstname(string $firstname): void {
        $this->firstname = $firstname;
    }

    public function setLastname(string $lastname): void {
        $this->lastname = $lastname;
    }

    public function setBiographie(string $biographie): void {
        $this->biographie = $biographie;
    }
}