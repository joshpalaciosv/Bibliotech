<?php

use PHPUnit\Framework\TestCase;

class CategoriaTest extends TestCase
{
    protected $categoria;

    protected function setUp(): void
    {
        $this->categoria = new Categoria("Ficción", "Libros de ficción");
    }

    public function testGetDescription()
    {
        $this->assertEquals("Libros de ficción", $this->categoria->getDescription());
    }

    public function testGetName()
    {
        $this->assertEquals("Ficción", $this->categoria->getName());
    }

    public function testGetBooksInCategory()
    {
        // Assuming the Categoria class has a method to get books in the category
        $this->assertIsArray($this->categoria->getBooksInCategory());
    }
}