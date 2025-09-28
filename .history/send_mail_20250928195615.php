<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = htmlspecialchars($_POST['nome']);
    $cognome = htmlspecialchars($_POST['cognome']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $arrivo = htmlspecialchars($_POST['arrivo']);
    $partenza = htmlspecialchars($_POST['partenza']);
    $adulti = htmlspecialchars($_POST['adulti']);
    $bambini = htmlspecialchars($_POST['bambini']);
    $note = htmlspecialchars($_POST['note']);

    $to = "info@hotelampgarden.it"; // Sostituire con la mail reale dell'hotel
    $subject = "Richiesta prenotazione da $nome $cognome";
    $message = "
Nome: $nome
Cognome: $cognome
Email: $email
Telefono: $telefono
Data arrivo: $arrivo
Data partenza: $partenza
Adulti: $adulti
Bambini: $bambini
Note: $note
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($to, $subject, $message, $headers)){
        header("Location: index.php?success=1");
        exit;
    } else {
        echo "Errore nell'invio della mail. Riprova.";
    }
}
?>
