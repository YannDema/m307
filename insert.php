<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anrede = $_POST['anrede'];
    $name = $_POST['name'];
    $adresse = $_POST['adresse'];
    $firmentelefon = $_POST['firmentelefon'];
    $mobiltelefon = $_POST['mobiltelefon'];
    $festnetztelefon = $_POST['festnetztelefon'];
    $email = $_POST['email'];
    $kundenklasse = $_POST['kundenklasse'];
    
    // Daten in Session speichern für Fehlerbehandlung
    session_start();
    $_SESSION['form_data'] = $_POST;
    
    $sql = "INSERT INTO kunden (anrede, name, adresse, firmentelefon, mobiltelefon, festnetztelefon, email, kundenklasse)
    VALUES ('$anrede', '$name', '$adresse', '$firmentelefon', '$mobiltelefon', '$festnetztelefon', '$email', '$kundenklasse')";
    
    if ($conn->query($sql) === TRUE) {
        // Nach erfolgreicher Einfügung alle Formular-Daten aus der Session löschen
        unset($_SESSION['form_data']);
        // Umleitung zur Liste mit Erfolgsmeldung in der Query
        header("Location: kunden-liste.php?success=1");
        exit();
    } else {
        // Bei Fehler zur Formularseite zurück mit Fehlermeldung
        $_SESSION['error_msg'] = "Fehler beim Speichern: " . $conn->error;
        header("Location: index.html?error=1");
        exit();
    }
}

$conn->close();
?>