<?php

use PHPUnit\Framework\TestCase;
use LibraryManagementSystem\Autor;
// Include the Autor class directly
require __DIR__ . '/../src/Autor.php';
use LibraryManagementSystem\Libro;
require __DIR__ . '/../src/Libro.php';

use LibraryManagementSystem\Biblioteca;
require __DIR__ . '/../src/Biblioteca.php';


class AutorTest extends TestCase
{
    protected $autor;
    protected $libro;
    protected $biblioteca;

    protected function setUp(): void
    {
        $this->autor = new Autor("J.K. Rowling", "British author, best known for the Harry Potter series.");
        $this->biblioteca = new Biblioteca();
    }

    public function testGetName()
    {
        $this->assertEquals("J.K. Rowling", $this->autor->getName());
    }

    public function testGetBiography()
    {
        $this->assertEquals("British author, best known for the Harry Potter series.", $this->autor->getBiography());
    }

    public function testGetBooks()
    {
        // Assuming the Autor class has a method to get books

        $this->libro = new Libro("Harry Potter and the Philosopher's Stone", "J.K. Rowling", "Fantasia");
        $this->biblioteca->addBook($this->libro);
        $this->libro = new Libro("Harry Potter and the Chamber of Secrets", "J.K. Rowling", "Fantasia");
        $this->biblioteca->addBook($this->libro);

        
        $books = $this->autor->getBooks($this->biblioteca);
        print_r($books);
        
        // transformando books en libros.
        $libros = array_map(function($book) {
            return new Libro($book['titulo'], $book['autor'], $book['genero']);
        }, $books);


        $this->assertCount(2, $books);

        $this->assertContains("Harry Potter and the Philosopher's Stone", $libros[0]->getDetalles()['titulo']);
        $this->assertContains("Harry Potter and the Chamber of Secrets", $libros[1]->getDetalles()['titulo']);
    }
    
}