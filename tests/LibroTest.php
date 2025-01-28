<?php

use PHPUnit\Framework\TestCase;

//require '../src/Libro.php';
use LibraryManagementSystem\Libro;
require __DIR__ . '/../src/Libro.php';

class LibroTest extends TestCase
{
    protected $libro;

    protected function setUp(): void
    {
        $this->libro = new Libro("Título de prueba", "Autor de prueba", "Categoría de prueba");
    }

    public function testGetDetails()
    {
        $expected = "Título de prueba, Autor de prueba, Categoría de prueba";
        $this->assertEquals($expected, $this->libro->getDetalles());
    }

    public function testUpdateDetails()
    {
        $this->libro->actualizarDetalles("Nuevo título", "Nuevo autor", "Nueva categoría");
        $expected = "Nuevo título, Nuevo autor, Nueva categoría";
        $this->assertEquals($expected, $this->libro->getDetalles());
    }

    public function testIsAvailable()
    {
        $this->assertTrue($this->libro->isAvailable());
        $this->libro->prestar();
        $this->assertFalse($this->libro->isAvailable());
    }
}