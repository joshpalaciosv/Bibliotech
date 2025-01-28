<?php

use PHPUnit\Framework\TestCase;
use LibraryManagementSystem\Biblioteca;
require __DIR__ . '/../src/Biblioteca.php';
use LibraryManagementSystem\Libro;
require __DIR__ . '/../src/Libro.php';

class BibliotecaTest extends TestCase
{
    protected $biblioteca;

    protected function setUp(): void
    {
        $this->biblioteca = new Biblioteca();
    }

    public function testAddBook()
    {
        $libro = new Libro("Título de prueba", "Autor de prueba", "Categoría de prueba");
        $this->biblioteca->addBook($libro);
        $this->assertCount(1, $this->biblioteca->getBooks());
    }

    public function testEditBook()
    {
        $libro = new Libro("Título de prueba", "Autor de prueba", "Categoría de prueba");
        $this->biblioteca->addBook($libro);
        $this->biblioteca->editBook($libro->getId(), ["titulo" => "Nuevo Título"]);
        $this->assertEquals("Nuevo Título", $this->biblioteca->searchBook("Nuevo Título")[0]->getDetalles()['titulo']);
    }

    public function testDeleteBook()
    {
        $libro = new Libro("Título de prueba", "Autor de prueba", "Categoría de prueba");
        $this->biblioteca->addBook($libro);
        $this->biblioteca->deleteBook($libro->getId());
        $this->assertCount(0, $this->biblioteca->getBooks());
    }

    public function testSearchBook()
    {
        $libro = new Libro("Título de prueba", "Autor de prueba", "Categoría de prueba");
        $this->biblioteca->addBook($libro);
        $result = $this->biblioteca->searchBook("Título de prueba");
        $this->assertEquals("Título de prueba", $result[0]->getDetalles()['titulo']);
    }

    public function testLoanBook()
    {
        $libro = new Libro("Título de prueba", "Autor de prueba", "Categoría de prueba");
        $this->biblioteca->addBook($libro);
        $this->biblioteca->loanBook($libro->getId());
        $this->assertFalse($libro->isAvailable());
    }
}