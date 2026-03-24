<?php

$host = $_ENV['DB_HOST'];
$dbname = $_ENV['DB_NAME'];
$port = $_ENV['DB_PORT'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, $pass, [PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}