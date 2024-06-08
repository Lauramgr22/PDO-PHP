<?php
$host     = "localhost";
$dbname   = "fakedb";
$user     = "root";
$password = "";

$dsn = "mysql:host=$host;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $user, $password);
    // Establecer el modo de error de PDO para que sea PDO::ERRMODE_EXCEPTION
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión establecida";
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
?>
