<?php
// Hauptformular für Kundeneintragung
// Session-Helper einbinden
require './session_help/session_helper.php';
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kundenverwaltung</title>
    <link rel="stylesheet" href="./stylesheet/style.css">
</head>
<body>
    <div class="container">
        <!-- Kopfzeile mit Navigation -->
        <div class="header-nav">
            <h1>Neuen Kunden anlegen</h1>
            <a href="kunden-liste.php" class="nav-button">Kundenliste anzeigen</a>
        </div>
        
        <!-- Fehlermeldung ausgeben wenn vorhanden -->
        <?php if (isset($_SESSION['error_msg'])): ?>
        <div class="error-message">
            <?php 
            echo $_SESSION['error_msg']; 
            unset($_SESSION['error_msg']); 
            ?>
        </div>
        <?php endif; ?>
        
        <!-- Formular für Kundendaten -->
        <form action="insert.php" method="POST" onsubmit="return validateForm()">
            <!-- Anrede auswählen -->
            <div class="form-group">
                <label for="anrede">Anrede <span class="required">*</span></label>
                <select name="anrede" id="anrede" required>
                    <option value="">Bitte wählen</option>
                    <option value="Herr" <?php echo is_selected('anrede', 'Herr'); ?>>Herr</option>
                    <option value="Frau" <?php echo is_selected('anrede', 'Frau'); ?>>Frau</option>
                    <option value="Divers" <?php echo is_selected('anrede', 'Divers'); ?>>Divers</option>
                </select>
            </div>

            <!-- Vor- und Nachname eingeben -->
            <div class="form-group">
                <label for="name">Vor- und Nachname <span class="required">*</span></label>
                <input type="text" id="name" name="name" required value="<?php echo get_session_value('name'); ?>">
            </div>

            <!-- Adresse eingeben -->
            <div class="form-group">
                <label for="adresse">Adresse <span class="required">*</span></label>
                <input type="text" id="adresse" name="adresse" required value="<?php echo get_session_value('adresse'); ?>">
            </div>

            <!-- Firmentelefon eingeben (optional) -->
            <div class="form-group">
                <label for="firmentelefon">Firmentelefon</label>
                <input type="tel" id="firmentelefon" name="firmentelefon" pattern="[0-9]+" value="<?php echo get_session_value('firmentelefon'); ?>">
            </div>

            <!-- Mobiltelefon eingeben (Pflicht) -->
            <div class="form-group">
                <label for="mobiltelefon">Mobiltelefon <span class="required">*</span></label>
                <input type="tel" id="mobiltelefon" name="mobiltelefon" required pattern="[0-9]+" value="<?php echo get_session_value('mobiltelefon'); ?>">
            </div>

            <!-- Festnetztelefon eingeben (optional) -->
            <div class="form-group">
                <label for="festnetztelefon">Festnetztelefon</label>
                <input type="tel" id="festnetztelefon" name="festnetztelefon" pattern="[0-9]+" value="<?php echo get_session_value('festnetztelefon'); ?>">
            </div>

            <!-- E-Mail eingeben (Pflicht) -->
            <div class="form-group">
                <label for="email">E-Mail <span class="required">*</span></label>
                <input type="email" id="email" name="email" required value="<?php echo get_session_value('email'); ?>">
            </div>

             <!-- Kundenklasse auswählen -->
            <div class="form-group">
                <label for="kundenklasse">Kundenklasse <span class="required">*</span></label>
                <select name="kundenklasse" id="kundenklasse" required>
                    <option value="">Bitte wählen</option>
                    <option value="Firmenkunde" <?php echo is_selected('kundenklasse', 'Firmenkunde'); ?>>Firmenkunde</option>
                    <option value="Einzelperson" <?php echo is_selected('kundenklasse', 'Einzelperson'); ?>>Einzelperson</option>
                    <option value="Partner" <?php echo is_selected('kundenklasse', 'Partner'); ?>>Partner</option>
                    <option value="Betriebslehrjahrstelle" <?php echo is_selected('kundenklasse', 'Betriebslehrjahrstelle'); ?>>Betriebslehrjahrstelle</option>
                </select>
            </div>

            <!-- Absenden-Button -->
            <input type="submit" value="Kunde anlegen">
        </form>
    </div>

    <!-- JavaScript für Formularvalidierung -->
    <script>
    function validateForm() {
        // Prüft, ob Mobiltelefon nur Zahlen enthält
        var mobiltelefon = document.getElementById("mobiltelefon").value;
        if (!/^[0-9]+$/.test(mobiltelefon)) {
            alert("Mobiltelefon darf nur Zahlen enthalten!");
            return false;
        }
        return true;
    }
    </script>
</body>
</html>