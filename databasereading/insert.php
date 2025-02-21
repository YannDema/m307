<?php
// Formular-Datenverarbeitung
require '../databaseconection/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Formulardaten einsammeln
    $anrede = $_POST['anrede'];
    $name = $_POST['name'];
    $adresse = $_POST['adresse'];
    $firmentelefon = $_POST['firmentelefon'];
    $mobiltelefon = $_POST['mobiltelefon'];
    $festnetztelefon = $_POST['festnetztelefon'];
    $email = $_POST['email'];
    $kundenklasse = $_POST['kundenklasse'];
    
// Daten für mögliche Fehler speichern
    session_start();
    $_SESSION['form_data'] = $_POST;

// Daten in Datenbank einfügen    
    $sql = "INSERT INTO kunden (anrede, name, adresse, firmentelefon, mobiltelefon, festnetztelefon, email, kundenklasse)
    VALUES ('$anrede', '$name', '$adresse', '$firmentelefon', '$mobiltelefon', '$festnetztelefon', '$email', '$kundenklasse')";
    
    if ($conn->query($sql) === TRUE) {
        // Nach erfolgreicher Einfügung alle Formular-Daten aus der Session löschen
        unset($_SESSION['form_data']);
        // Umleitung zur Liste mit Erfolgsmeldung in der Query
        header("Location: ../kunden-liste.php?success=1");
        exit();
    } else {
        // Bei Fehler zur Formularseite zurück mit Fehlermeldung
        $_SESSION['error_msg'] = "Fehler beim Speichern: " . $conn->error;
        header("Location: ../index.php?error=1");
        exit();
    }
}

$conn->close();