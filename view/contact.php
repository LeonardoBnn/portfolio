<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ==========================
//  Chargement de PHPMailer
// ==========================
//require 'vendor/autoload.php'; 
// Si tu n'utilises pas Composer, commente la ligne au-dessus
// et décommente celles-ci en adaptant le chemin :
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require '../PHPMailer/src/Exception.php';
require '../config/config.mailer.php';

$successMessage = '';
$errorMessage = '';

// Pour pré-remplir le formulaire en cas d'erreur
$nom = '';
$prenom = '';
$email = '';
$sujet = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération & nettoyage
    $nom    = trim($_POST['nom'] ?? '');
    $prenom = trim($_POST['prenom'] ?? '');
    $email  = trim($_POST['email'] ?? '');
    $sujet  = trim($_POST['sujet'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validation basique
    if ($nom === '' || $prenom === '' || $email === '' || $sujet === '' || $message === '') {
        $errorMessage = "Merci de remplir tous les champs du formulaire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "L'adresse email saisie n'est pas valide.";
    } else {

        // ==========================
        //  CONFIG SMTP (GMAIL)
        // ==========================
        // ⚠️ Remplace par TON adresse + mot de passe d'application Gmail

        // Adresse où tu reçois les messages du site
        $ownerEmail = 'boninoleonardo@gmail.com';
        $ownerName  = 'Leonardo Bonino';

        try {
            // ==========================
            //  1) MAIL POUR TOI
            // ==========================
            $mailOwner = new PHPMailer(true);
            $mailOwner->isSMTP();
            $mailOwner->Host       = $smtpHost;
            $mailOwner->SMTPAuth   = true;
            $mailOwner->Username   = $smtpUser;
            $mailOwner->Password   = $smtpPass;
            $mailOwner->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mailOwner->Port       = $smtpPort;

            // Encodage
            $mailOwner->CharSet = 'UTF-8';

            // Expéditeur (le site)
            $mailOwner->setFrom($ownerEmail, 'Portfolio Leonardo Bonino');

            // Destinataire : toi
            $mailOwner->addAddress($ownerEmail, $ownerName);

            // Reply-To : l'utilisateur (pour répondre facilement)
            $mailOwner->addReplyTo($email, $nom . ' ' . $prenom);

            $mailOwner->isHTML(false);
            $mailOwner->Subject = 'Nouveau message via le portfolio : ' . $sujet;

            $bodyOwner = "Vous avez reçu un nouveau message depuis le formulaire de contact de votre portfolio.\n\n"
                . "Nom : {$nom}\n"
                . "Prénom : {$prenom}\n"
                . "Email : {$email}\n"
                . "Sujet : {$sujet}\n\n"
                . "Message :\n{$message}\n";

            $mailOwner->Body = $bodyOwner;

            // ==========================
            //  2) MAIL POUR L'UTILISATEUR
            // ==========================
            $mailUser = new PHPMailer(true);
            $mailUser->isSMTP();
            $mailUser->Host       = $smtpHost;
            $mailUser->SMTPAuth   = true;
            $mailUser->Username   = $smtpUser;
            $mailUser->Password   = $smtpPass;
            $mailUser->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mailUser->Port       = $smtpPort;

            $mailUser->CharSet = 'UTF-8';

            // Expéditeur : toi
            $mailUser->setFrom($ownerEmail, 'Portfolio Leonardo Bonino');
            // Destinataire : l'utilisateur
            $mailUser->addAddress($email, $prenom . ' ' . $nom);

            $mailUser->isHTML(false);
            $mailUser->Subject = 'Confirmation de réception – Portfolio Leonardo Bonino';

            $bodyUser = "Bonjour {$prenom},\n\n"
                . "Merci pour votre message, il a bien été reçu.\n\n"
                . "Récapitulatif de votre demande :\n"
                . "Sujet : {$sujet}\n\n"
                . "Message :\n{$message}\n\n"
                . "Je vous répondrai dans les plus brefs délais.\n\n"
                . "Cordialement,\n"
                . "Leonardo Bonino";

            $mailUser->Body = $bodyUser;

            // ==========================
            //  ENVOI DES 2 MAILS
            // ==========================
            $mailOwner->send();
            $mailUser->send();

            $successMessage = "Votre message a bien été envoyé. Un email de confirmation vous a été transmis.";
            // On vide les champs du formulaire
            $nom = $prenom = $email = $sujet = $message = '';

        } catch (Exception $e) {
            // En cas d'erreur SMTP / PHPMailer
            // Tu peux logger $e->getMessage() dans un fichier si tu veux
            $errorMessage = "Une erreur est survenue lors de l'envoi du message. Merci de réessayer plus tard.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact — Portfolio Leonardo Bonino</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body class="contact-page">

    <!-- Bouton retour en haut à gauche -->
    <a href="../index.php" class="back-button-contact">← Retour au site</a>

    <main>
        <section class="contact-form-section">
            <h1>Me contacter</h1>
            <p class="contact-intro">
                Une question, un projet, une opportunité d’alternance ou de collaboration ?
                Laissez-moi un message et je vous répondrai dès que possible.
            </p>

            <?php if (!empty($successMessage)): ?>
                <div class="alert alert-success">
                    <?php echo htmlspecialchars($successMessage, ENT_QUOTES, 'UTF-8'); ?>
                </div>
            <?php elseif (!empty($errorMessage)): ?>
                <div class="alert alert-error">
                    <?php echo htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8'); ?>
                </div>
            <?php endif; ?>

            <div class="contact-card">
                <form action="" method="POST" class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom"
                                   value="<?php echo htmlspecialchars($nom, ENT_QUOTES, 'UTF-8'); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" id="prenom" name="prenom"
                                   value="<?php echo htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8'); ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <input type="email" id="email" name="email"
                               value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="sujet">Sujet</label>
                        <input type="text" id="sujet" name="sujet"
                               value="<?php echo htmlspecialchars($sujet, ENT_QUOTES, 'UTF-8'); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="6" required><?php
                            echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
                        ?></textarea>
                    </div>

                    <button type="submit" class="submit-contact">Envoyer</button>
                </form>
            </div>
        </section>
    </main>

</body>
</html>
