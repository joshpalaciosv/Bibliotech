<?php
require 'src/utils/Database.php';

$db = new Database();
$connection = $db->connect();

if ($connection) {
    echo "Connected successfully!";
} else {
    echo "Connection failed!";
}