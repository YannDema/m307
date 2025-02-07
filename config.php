<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kundenverwaltung";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Datenbank erstellen
$sql = "CREATE DATABASE IF NOT EXISTS kundenverwaltung";
if ($conn->query($sql) === TRUE) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Tabelle erstellen mit neuem Feld für Namen
    $sql = "CREATE TABLE IF NOT EXISTS kunden (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        anrede ENUM('Herr', 'Frau', 'Divers') NOT NULL,
        name VARCHAR(100) NOT NULL,
        adresse VARCHAR(255) NOT NULL,
        firmentelefon VARCHAR(20),
        mobiltelefon VARCHAR(20) NOT NULL,
        festnetztelefon VARCHAR(20),
        email VARCHAR(50) NOT NULL,
        kundenklasse ENUM('Firmenkunde', 'Einzelperson', 'Partner', 'Betriebslehrjahrstelle') NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    $conn->query($sql);
}
?>
