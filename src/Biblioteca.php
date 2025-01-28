<?php
namespace LibraryManagementSystem;
use LibraryManagementSystem\Libro;

class Biblioteca {
    private $libros = [];
    
    public function addBook(Libro $libro) {
        $this->libros[] = $libro;
    }
    
    public function getBooks() {
        return $this->libros;
    }

    public function editBook($id, $nuevoLibro) {
        foreach ($this->libros as $key => $libro) {
            //$detalles = $libro->getDetalles();
            if ($libro->getId() === $id) {
                $this->libros[$key] = $nuevoLibro;
                return true;
            }
        }
        return false;
    }

    public function deleteBook($id) {
        foreach ($this->libros as $key => $libro) {
            //$detalles = $libro->getDetalles();
            if ($libro->getId() === $id) {
                unset($this->libros[$key]);
                return true;
            }
        }
        return false;
    }

    public function searchBook($criterio) {
        $resultados = [];
        foreach ($this->libros as $libro) {
            $detalles = $libro->getDetalles();
            if (strpos($detalles['titulo'], $criterio) !== false || 
                strpos($detalles['autor'], $criterio) !== false || 
                strpos($detalles['categoria'], $criterio) !== false) {
                $resultados[] = $libro;
            }
        }
        return $resultados;
    }

    public function loanBook($id) {
        foreach ($this->libros as $libro) {
            //$detalles = $libro->getDetalles();
            if ($libro->getId() === $id && $libro->isAvailable()) {
                $libro->setAvailable(false);
                return true;
            }
        }
        return false;
    }
}
?>