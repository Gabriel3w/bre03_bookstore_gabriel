<?php

class Book {
    private $id;
    private $title;
    private $author_id;

    public function __construct($id, $title, $author_id) {
        $this->id = $id;
        $this->title = $title;
        $this->author_id = $author_id;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthorId() {
        return $this->author_id;
    }
}
?>