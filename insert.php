// insert.php
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $anrede = $_POST['anrede'];
    $name = $_POST['name'];
    $adresse = $_POST['adresse'];
    $firmentelefon = $_POST['firmentelefon'];
    $mobiltelefon = $_POST['mobiltelefon'];
    $festnetztelefon = $_POST['festnetztelefon'];
    $email = $_POST['email'];
    $kundenklasse = $_POST['kundenklasse'];
    
    $sql = "INSERT INTO kunden (anrede, name, adresse, firmentelefon, mobiltelefon, festnetztelefon, email, kundenklasse)
    VALUES ('$anrede', '$name', '$adresse', '$firmentelefon', '$mobiltelefon', '$festnetztelefon', '$email', '$kundenklasse')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.html?success=1");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>