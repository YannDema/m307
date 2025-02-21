<?php
// Helfer für Session-Daten
session_start();

// Funktion zum sicheren Abrufen von Session-Daten
function get_session_value($key, $default = '') {
    if (isset($_SESSION['form_data']) && isset($_SESSION['form_data'][$key])) {
        $value = $_SESSION['form_data'][$key];
        return htmlspecialchars($value);
    }
    return $default;
}

// Prüft, ob ein Wert ausgewählt sein soll
function is_selected($field, $value) {
    if (isset($_SESSION['form_data']) && isset($_SESSION['form_data'][$field]) && $_SESSION['form_data'][$field] == $value) {
        return 'selected';
    }
    return '';
}
?>