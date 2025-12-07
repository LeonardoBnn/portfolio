<?php
// 1. CONFIGURATION DES SOURCES RSS
// C'est ici que tu définis quel sujet correspond à quelle URL RSS
$configs = [
    'php' => [
        'titre' => 'Les dernières actualités de PHP',
        // On passe sur le tag PHP de Dev.to : très actif et pas bloqué
        'url'   => 'https://stitcher.io/rss', 
        'icon'  => 'fa-brands fa-php',
        'desc'  => 'Veille communautaire sur les dernières pratiques et versions de PHP.'
    ],
    'pdo' => [
        'titre' => 'PDO & Base de données',
        // Le flux RSS des questions récentes tagguées "pdo" sur StackOverflow
        'url'   => 'https://stackoverflow.com/feeds/tag?tagnames=pdo&sort=newest', 
        'icon'  => 'fa-solid fa-database', // Icône "Base de données"
        'desc'  => 'Retours d\'expérience, débogage et bonnes pratiques de sécurité SQL.'
    ],
    'securite' => [
        'titre' => 'Sécurité Applicative PHP',
        // On combine les tags 'php' ET 'security' pour avoir uniquement la sécurité liée au code PHP
        'url'   => 'https://stackoverflow.com/feeds/tag?tagnames=php+security&sort=newest', 
        'icon'  => 'fa-solid fa-code-branch', // Icône "Code/Branche" pour le côté dev
        'desc'  => 'Bonnes pratiques de codage sécurisé : protection contre XSS, CSRF et Injections SQL.'
    ],
    'mailer' => [
        'titre' => 'Sujets PHPMailer & SMTP',
        'url'   => 'https://stackoverflow.com/feeds/tag?tagnames=phpmailer&sort=newest', 
        'icon'  => 'fa-solid fa-paper-plane',
        'desc'  => 'Questions techniques et évolutions sur l\'envoi d\'emails.'
    ]
];

// 2. RÉCUPÉRATION DU SUJET VIA L'URL
// Si ?sujet=php, alors $sujet vaut 'php'. Sinon par défaut on met 'php'.
$sujet = isset($_GET['sujet']) && array_key_exists($_GET['sujet'], $configs) ? $_GET['sujet'] : 'php';

$currentConfig = $configs[$sujet];

// 3. FONCTION DE RÉCUPÉRATION RSS (La même que précédemment)
// 3. FONCTION DE RÉCUPÉRATION RSS AMÉLIORÉE (Via cURL)
function getRssItems($url, $limit = 10) {
    // A. Initialisation de cURL
    $ch = curl_init();
    
    // B. Configuration des options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Retourner le contenu dans une variable
    curl_setopt($ch, CURLOPT_HEADER, false);
    
    // C. ASTUCE : On se fait passer pour un navigateur Windows pour ne pas être bloqué
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36');
    
    // D. Ignorer les erreurs SSL (utile en local sur WAMP/XAMPP si tu n'as pas les certificats)
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    
    // E. Exécution
    $content = curl_exec($ch);
    $error = curl_error($ch); // On capture les erreurs éventuelles
    curl_close($ch);

    // Si cURL a échoué, on affiche l'erreur (pour le débuggage)
    if ($content === false) {
        // Tu pourras supprimer cet echo une fois que ça marche
        echo "<p style='color:red; text-align:center;'>Erreur cURL : $error</p>";
        return [];
    }

    // F. Chargement du XML depuis la chaîne de caractères récupérée
    $rss = @simplexml_load_string($content);
    
    $items = [];
    
    if ($rss) {
        // Parfois les items sont dans channel->item, parfois directement à la racine (selon le format RSS/Atom)
        // On essaye de trouver où sont les données
        $feedItems = $rss->channel->item; // Standard RSS 2.0
        
        // Si c'est un flux Atom (comme Google News parfois), la structure est différente
        if (!$feedItems) {
            $feedItems = $rss->entry; // Format Atom
        }

        if ($feedItems) {
            foreach ($feedItems as $item) {
                if (count($items) >= $limit) break;
                
                // 1. On cherche la description standard
                $desc = (string)($item->description ?? $item->summary);

                // 2. Si elle est vide, on cherche dans "content:encoded" (utilisé par Dev.to/WordPress)
                // Cela nécessite d'accéder aux "namespaces" XML
                if (empty($desc)) {
                    $content = $item->children('content', true);
                    if (isset($content->encoded)) {
                        $desc = (string)$content->encoded;
                    }
                }

                // 3. Nettoyage HTML brutal pour n'avoir que du texte
                $desc = strip_tags($desc);
                
                // 4. On coupe si c'est trop long
                if (strlen($desc) > 180) {
                    $desc = substr($desc, 0, 180) . '...';
                }

                // 5. Gestion du lien
                $link = (string)$item->link;
                if(empty($link) && isset($item->link['href'])) {
                    $link = (string)$item->link['href'];
                }

                $items[] = [
                    'title' => (string)$item->title,
                    'link'  => $link,
                    'date'  => date('d/m/Y', strtotime((string)$item->pubDate)),
                    'desc'  => $desc
                ];
            }
        }
    }
    return $items;
}

// On récupère les articles du sujet choisi
$articles = getRssItems($currentConfig['url'], 12);
?>