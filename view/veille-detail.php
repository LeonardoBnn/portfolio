<?php
    require_once 'veille.php';
?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Leonardo Bonino</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/8419f108ca.js" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
</head>

<body>
        <a href="../index.php" class="back-button-contact">← Retour au site</a>

    <main style="margin-left: 0; padding-top: 80px;">
        
        <section class="veille-intro" style="margin-top: 0;">
            <h1 style="font-size: 2.5em; margin-bottom: 10px;">
                <i class="<?php echo $currentConfig['icon']; ?>"></i> 
               <?php echo $currentConfig['titre']; ?>
            </h1>
             <center><p><?php echo $currentConfig['desc']; ?></p></center>
            <hr style="margin: 20px auto;">
        </section>

        <section class="veille-section">
            <div class="veille-grid">
                
                <?php if (!empty($articles)): ?>
                    <?php foreach ($articles as $art): ?>
                        <article class="veille-card">
                            <div class="veille-icon">
                                <i class="fa-solid fa-rss"></i>
                            </div>
                            <div class="veille-content">
                                <h3><?php echo $art['title']; ?></h3>
                                
                                <p><?php echo $art['desc']; ?></p>
                                
                                <div class="veille-tags">
                                    <a href="<?php echo $art['link']; ?>" target="_blank" class="veille-btn" style="margin-top: auto;">
                                        Lire l'article complet
                                    </a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="veille-card" style="grid-column: 1 / -1; text-align: center;">
                        <h3>Oups !</h3>
                        <p>Impossible de charger le flux RSS pour le moment (ou le site distant bloque la connexion).</p>
                        <p>URL tentée : <?php echo $currentConfig['url']; ?></p>
                    </div>
                <?php endif; ?>

            </div>
        </section>

    </main>

</body>
</html>