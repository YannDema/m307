<?php
// Anzeige aller eingetragenen Kunden
require 'config.php';
session_start();

// Alle Kunden aus der Datenbank holen
$sql = "SELECT * FROM kunden ORDER BY reg_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kundenliste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <!-- Kopfzeile mit Navigation -->
        <div class="header-nav">
            <h1>Kundenliste</h1>
            <a href="index.php" class="nav-button">Neuen Kunden anlegen</a>
        </div>
       
        <!-- Erfolgsmeldung anzeigen, wenn Parameter gesetzt -->
        <?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
        <div class="success-message">
            Kunde wurde erfolgreich angelegt!
        </div>
        <?php endif; ?>
        
        <!-- Kundendaten als Tabelle anzeigen -->
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Anrede</th>
                        <th>Name</th>
                        <th>Adresse</th>
                        <th>Mobiltelefon</th>
                        <th>Firmentelefon</th>
                        <th>Festnetz</th>
                        <th>E-Mail</th>
                        <th>Kundenklasse</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Durch alle Datensätze iterieren
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["id"] . "</td>";
                            echo "<td>" . $row["anrede"] . "</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "<td>" . $row["adresse"] . "</td>";
                            echo "<td>" . $row["mobiltelefon"] . "</td>";
                            echo "<td>" . $row["firmentelefon"] . "</td>";
                            echo "<td>" . $row["festnetztelefon"] . "</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "<td>" . $row["kundenklasse"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        // Meldung bei leerer Tabelle
                        echo "<tr><td colspan='9'>Keine Kunden gefunden</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
