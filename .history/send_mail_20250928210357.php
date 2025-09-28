<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Includi PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Prendi i dati dal form in modo sicuro
    $nome = htmlspecialchars($_POST['nome']);
    $cognome = htmlspecialchars($_POST['cognome']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $arrivo = htmlspecialchars($_POST['arrivo']);
    $partenza = htmlspecialchars($_POST['partenza']);
    $adulti = htmlspecialchars($_POST['adulti']);
    $bambini = htmlspecialchars($_POST['bambini']);
    $note = htmlspecialchars($_POST['note']);

    $mail = new PHPMailer(true);

    try {
        // Configurazione SMTP Gmail
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'noreplyampgarden@gmail.com'; // email del sito
        $mail->Password = 'geea hjpn rzxd osln';         // password per app Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Mittente obbligatorio per SMTP
        $mail->setFrom('noreplyampgarden@gmail.com', 'Hotel AMP Garden');

        // Risposta alla mail dell'utente
        $mail->addReplyTo($email, "$nome $cognome");

        // Destinatario (email dell’hotel)
        $mail->addAddress('bytelabstudio@gmail.com');

        // Contenuto della mail
        $mail->isHTML(true);
        $mail->Subject = "Richiesta prenotazione da $nome $cognome";
        $mail->Body = "
            <h3>Nuova richiesta di prenotazione</h3>
            <p>
            <b>Nome:</b> $nome<br>
            <b>Cognome:</b> $cognome<br>
            <b>Email:</b> $email<br>
            <b>Telefono:</b> $telefono<br>
            <b>Arrivo:</b> $arrivo<br>
            <b>Partenza:</b> $partenza<br>
            <b>Adulti:</b> $adulti<br>
            <b>Bambini:</b> $bambini<br>
            <b>Note:</b> $note
            </p>
        ";

        // Debug SMTP (solo per test, rimuovere in produzione)
        //$mail->SMTPDebug = 2; 

        // Invia la mail
        $mail->send();

        // Redirect al sito con messaggio di successo
        header("Location: index.php?success=1");
        exit;

    } catch (Exception $e) {
        echo "Errore nell'invio della mail: {$mail->ErrorInfo}";
    }
}
