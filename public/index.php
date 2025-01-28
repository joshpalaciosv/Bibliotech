<?php
require '../src/Biblioteca.php';
require_once '../src/Libro.php';
require_once '../src/Autor.php';
require_once '../src/Categoria.php';
require_once '../src/utils/Database.php';

use LibraryManagementSystem\Biblioteca;

// Inicialización de la aplicación
$biblioteca = new Biblioteca();

// Manejo de solicitudes
$requestMethod = $_SERVER['REQUEST_METHOD'];
switch ($requestMethod) {
    case 'GET':
        // Lógica para manejar las solicitudes GET (por ejemplo, búsqueda de libros)
        break;
    case 'POST':
        // Lógica para manejar las solicitudes POST (por ejemplo, agregar un libro)
        break;
    case 'PUT':
        // Lógica para manejar las solicitudes PUT (por ejemplo, editar un libro)
        break;
    case 'DELETE':
        // Lógica para manejar las solicitudes DELETE (por ejemplo, eliminar un libro)
        break;
    default:
        // Método no permitido
        http_response_code(405);
        echo json_encode(['message' => 'Método no permitido']);
        break;
}
?>