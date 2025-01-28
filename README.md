# Library Management System

## Overview
This project is a Library Management System developed in PHP using Object-Oriented Programming (OOP) principles. It allows users to manage a collection of books, authors, and categories, providing functionalities for adding, editing, deleting, and searching for books, as well as managing book loans.

## Project Structure
```
library-management-system
├── src
│   ├── Biblioteca.php      # Manages the collection of books
│   ├── Libro.php           # Represents a book entity
│   ├── Autor.php           # Represents an author
│   ├── Categoria.php       # Represents a book category
│   └── utils
│       └── Database.php    # Utility functions for database interactions
├── public
│   ├── index.php           # Entry point for the application
│   └── css
│       └── styles.css      # CSS styles for the application
├── config
│   └── config.php          # Configuration settings for the application
├── tests
│   ├── BibliotecaTest.php   # Unit tests for Biblioteca class
│   ├── LibroTest.php        # Unit tests for Libro class
│   ├── AutorTest.php        # Unit tests for Autor class
│   └── CategoriaTest.php    # Unit tests for Categoria class
├── vendor                   # Composer dependencies
├── composer.json            # Composer configuration file
└── README.md                # Project documentation
```

## Features
- **Book Management**: Add, edit, delete, and search for books.
- **Author Management**: Manage author information and retrieve their works.
- **Category Management**: Organize books into categories and retrieve category details.
- **Book Loans**: Allow users to request book loans and manage their availability.

## Installation
1. Clone the repository:
   ```
   git clone https://github.com/yourusername/library-management-system.git
   ```
2. Navigate to the project directory:
   ```
   cd library-management-system
   ```
3. Install dependencies using Composer:
   ```
   composer install
   ```
4. Configure your database settings in `config/config.php`.

## Usage
- Access the application by navigating to `public/index.php` in your web browser.
- Follow the on-screen instructions to manage books, authors, and categories.

## Testing
Run the unit tests to ensure the functionality of the application:
```
vendor/bin/phpunit tests/
```

## Contributing
Contributions are welcome! Please open an issue or submit a pull request for any enhancements or bug fixes.

## License
This project is licensed under the MIT License. See the LICENSE file for details.