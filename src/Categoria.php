<?php
class Categoria {
    private $name;
    private $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getBooksInCategory($books) {
        $booksInCategory = [];
        foreach ($books as $book) {
            if ($book->getCategory() === $this->name) {
                $booksInCategory[] = $book;
            }
        }
        return $booksInCategory;
    }
}