<?php
namespace LibraryManagementSystem;
class Libro {
    private $id;
    private $titulo;
    private $autor;
    private $categoria;
    private $disponible;

    public function __construct($titulo, $autor, $categoria, $disponible = true, $id = null) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->categoria = $categoria;
        $this->disponible = $disponible;
        $this->id = $id ?? uniqid(); // Generate a unique ID if not provided
    }

    public function getId()
    {
        return $this->id;
    }

    public function getDetalles() {
        return [
            'titulo' => $this->titulo,
            'autor' => $this->autor,
            'categoria' => $this->categoria,
            'disponible' => $this->disponible
        ];
    }

    public function actualizarDetalles($titulo, $autor, $categoria) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->categoria = $categoria;
    }

    public function isAvailable() {
        return $this->disponible;
    }

    public function setAvailable($disponible) {
        $this->disponible = $disponible;
    }

    public function prestar() {
        if ($this->disponible) {
            $this->disponible = false;
            return true;
        }
        return false;
    }

    public function devolver() {
        $this->disponible = true;
    }
}
?>