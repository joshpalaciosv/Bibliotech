<?php
namespace LibraryManagementSystem;
use LibraryManagementSystem\Biblioteca;

class Autor {
    private $name;
    private $biography;

    public function __construct($name, $biography) {
        $this->name = $name;
        $this->biography = $biography;
    }

    public function getName() {
        return $this->name;
    }

    public function getBiography() {
        return $this->biography;
    }

    public function getBooks(Biblioteca $books) {
        $authorBooks = [];
        foreach ($books->getBooks() as $book) {
            if ($book->getDetalles()['autor'] === $this->name) {
                $authorBooks[] = $book;
            }
        }
        return $authorBooks;
    }
}