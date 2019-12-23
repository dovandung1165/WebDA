<?php
$server = 'localhost';
$username = 'id11045465_root';
$password = 'Sunflower';
$database = 'id11045465_clothes';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
