<?php
// Sprawdzenie, czy żądanie jest typu POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobranie danych z formularza logowania
    $email = $_POST["login-email"];
    $password = $_POST["login-password"];

    // Sprawdzenie poprawności danych (np. porównanie z danymi w bazie danych)

    // Przykładowa weryfikacja (tutaj zakładamy, że prawidłowe dane to "admin" jako email i "password" jako hasło)
    if ($email == "admin@admin.pl" && $password == "password") {
        // Uwierzytelnienie poprawne
        echo "Zalogowano pomyślnie!";
    } else {
        // Uwierzytelnienie nieudane
        echo "Nieprawidłowy email lub hasło!";
    }
}
?>
