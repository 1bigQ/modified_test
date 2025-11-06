Das <?php

declare(strict_types=1);

// MailSender-Klasse einbinden
require_once __DIR__ . '/../includes/MailSender.php';

// E-Mail-Konfiguration
$to = 'info@modified-shop.org';
$subject = '🎉 Grüße aus dem Admin-Bereich!';

// Lustige E-Mail-Nachricht
$message = "Hallo liebes Modified-Shop Team! 👋\n\n";
$message .= "Ein mutiger Admin hat gerade auf einen mysteriösen Button geklickt...\n\n";
$message .= "🎪 Witz des Tages:\n";
$message .= "Letzter Wunsch des Programmierers:\n";
$message .= "Bitte ein Bit. 🐛🐛🐛\n\n";
$message .= "Mit freundlichen Grüßen,\n";
$message .= "Ihr automatisiertes E-Mail-System\n\n";
$message .= "P.S.: Diese E-Mail wurde am " . date('d.m.Y \u\m H:i:s') . " Uhr versendet.\n";

// MailSender-Instanz erstellen und E-Mail versenden
$mailSender = new MailSender();

if ($mailSender->send($to, $subject, $message)) {
    echo "✅ E-Mail erfolgreich versendet an $to!<br>";
    echo "📧 Betreff: $subject<br>";
    echo "<hr>";
    echo "<h3>Nachricht:</h3>";
    echo "<pre>" . htmlspecialchars($message) . "</pre>";
} else {
    echo "❌ Fehler beim Versenden der E-Mail.";
}
