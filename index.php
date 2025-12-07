<!DOCTYPE html>
<html lang="fr-FR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Leonardo Bonino</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8419f108ca.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</head>
<body class="">

    <header>
        <nav class="nav-bar">
            <img class="img-leo" src="img/cv.2.jpg" alt="photo de Leonardo Bonino">
            <a href="#bienvenue"><i class="fa-solid fa-house"></i>&nbsp; Bienvenue</a>
            <a href="#apropos"><i class="fa-regular fa-user"></i>&nbsp; À propos</a>
            <a href="#monentreprise"><i class="fa-solid fa-briefcase"></i>&nbsp; Mon entreprise</a>
            <a href="#parcours"><i class="fa-solid fa-book"></i>&ensp;Parcours</a>
            <a href="#certification"><i class="fa-solid fa-certificate"></i>&ensp;Certifications</a>
            <a href="#projets"><i class="fa-solid fa-hammer"></i>&nbsp; Projets</a>
            <a href="#veille"><i class="fa-solid fa-arrows-spin"></i>&nbsp; Veille technologique</a>
            <a href="#contacts"><i class="fa-regular fa-address-book"></i>&nbsp; Contacts</a>
        </nav>
    </header>

    <main class="main">
        
            <section id="bienvenue">
            <br><h1>Bienvenue sur le portfolio de Leonardo Bonino</h1>
            </section>
            <br><br>
        <section id="apropos" class="apropos">
            <h2>À propos de moi :</h2>
            <br>
            <hr>
            <br>
            <p id="typed-text"></p>
            <br>
            <br>
            <div class="cv">
                <p>Allons droit au but !</p>
                <button class="moncv" id="cvButton" type="button">Mon CV</button>
            </div>

            <!-- Fenêtre modale -->
            <div id="cvModal" class="modal" ">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <iframe id="cvFrame" width="100%" height="600px" ></iframe>
                </div>
            </div>

            <br>
            <br>
            <h2>À propos du BTS SIO :</h2>
            <br>
            <hr>
            <br>
            <p>Le BTS SIO (Services Informatiques aux Organisations) est une formation qui prépare les étudiants aux métiers de l’informatique. Il se décline en deux options : SISR (réseaux & systèmes) et SLAM (développement). Il permet d’acquérir des compétences techniques solides.</p>
            <br>
            <div class="bts-container">
                <div class="bts-text hidden">
                    <h3><i class="fa-solid fa-network-wired"></i>   Option SISR</h3><br>
                    <p>L’option Solutions d’infrastructure, systèmes et réseaux (SISR) forme des spécialistes en gestion et sécurisation des réseaux informatiques. À l’issue du BTS SIO SISR, vous serez en mesure d’installer, administrer et assurer la maintenance des infrastructures réseaux d’une entreprise, tout en veillant à leur sécurité.</p>
                    <br>
                    <p>Voici les postes auquels vous pourrez postuler une fois terminé la formation :</p>
                    <ul>
                        <li>Administrateur systèmes et réseaux</li>
                        <li>Informaticien support et déploiement</li>
                        <li>Pilote d’exploitation</li>
                        <li>Support systèmes et réseaux</li>
                        <li>Technicien d’infrastructure</li>
                        <li>Technicien de production</li>
                        <li>Technicien micro et réseaux</li>
                    </ul>
                </div>
                <div class="bts-text hidden">
                    <h3><i class="fa-solid fa-file-code"></i>   Option SLAM</h3><br>
                    <p>L’option Solutions Logicielles et Applications Métiers (SLAM) forme des experts en développement et intégration de logiciels. Elle couvre l’ensemble du processus, de l’analyse des besoins à la rédaction du cahier des charges, en passant par le développement et l’implémentation des solutions logicielles adaptées aux entreprises.</p>
                    <br>
                    <p>Voici les postes auquels vous pourrez postuler une fois terminé la formation :</p>
                    <ul>
                        <li>Développeur d’applications informatiques</li>
                        <li>Développeur informatique</li>
                        <li>Analyste d’applications ou d’études</li>
                        <li>Analyste programmeur</li>
                        <li>Programmeur d’applications</li>
                        <li>Responsable des services applicatifs</li>
                        <li>Technicien d’études informatiques</li>
                    </ul>
                </div>
            </div>
            <br><br>
            <h2>Mes compètences :</h2>
            <br>
            <hr>
            <br>
            <section class="enterprise">
                <div class="enterprise-grid">

                    <!-- CARD 1 - Développement -->
                        <article class="enterprise-card">
                            <h3 class="enterprise-card-title">
                                <i class="fa-solid fa-code"></i> Développement
                            </h3>
                            <p class="enterprise-card-text">
                                Conception et développement d’applications web avec une approche méthodique et sécurisée qui vise à améliorer la maintenabilité.
                            </p>
                            <ul class="enterprise-list">
                                <li>PHP, MySQL</li>
                                <li>HTML, CSS</li>
                                <li>Modélisation</li>
                                <li>Sécurité Web</li>
                                <li>Tests unitaires & débogage</li>
                            </ul>
                        </article>

                    <!-- CARD 2 - Systèmes & Réseaux -->
                        <article class="enterprise-card">
                            <h3 class="enterprise-card-title">
                                <i class="fa-solid fa-network-wired"></i> Systèmes & Réseaux
                            </h3>
                            <p class="enterprise-card-text">
                                Bases solides pour comprendre, diagnostiquer et sécuriser les environnements systèmes et réseaux.
                            </p>
                            <ul class="enterprise-list">
                                <li>Windows / Linux </li>
                                <li>Virtualisation </li>
                                <li>Apache</li>
                                <li>Sécurité & bonnes pratiques</li>
                            </ul>
                        </article>

                    <!-- CARD 3 - Gestion de projet -->
                        <article class="enterprise-card">
                            <h3 class="enterprise-card-title">
                                <i class="fa-solid fa-diagram-project"></i> Gestion de projet
                            </h3>
                            <p class="enterprise-card-text">
                                Organisation, suivi et gestion de la qualité dans des contextes agiles ou en cycle classique.
                            </p>
                            <ul class="enterprise-list">
                                <li>Méthodologie Agile (Scrum)</li>
                                <li>Recette logicielle & tests</li>
                                <li>Rédaction de documentation</li>
                                <li>Analyse fonctionnelle</li>
                                <li>Communication & reporting</li>
                            </ul>
                        </article>

                    </div>
                </section>

            <br><br>
            <h2>Mon entreprise d'accueil</h2>
                <br>
                <hr>
            
            <section id="monentreprise" class="enterprise">
  <!-- HERO -->
  <div class="enterprise-hero" aria-label="Présentation SNCF Direction Sûreté">
    <!-- Remplace l'image ci-dessous si tu en as une -->
    <img src="img/surete.webp" alt="Sûreté ferroviaire" class="enterprise-hero-img" />
    <div class="enterprise-hero-overlay"></div>

    <div class="enterprise-hero-content">
      <h2 class="enterprise-title">SNCF – Direction Sûreté</h2>
      <p class="enterprise-subtitle">Sûreté des voyageurs, du personnel & des infrastructures</p>

      <div class="enterprise-badges">
        <span class="badge"><i class="fa-solid fa-train"></i> Ferroviaire</span>
        <span class="badge"><i class="fa-solid fa-shield-halved"></i> Prévention & détection</span>
        <span class="badge"><i class="fa-solid fa-user-shield"></i> Partenaires opérationnels</span>
        <span class="badge badge-muted"><i class="fa-solid fa-eye-slash"></i> Détails confidentiels</span>
      </div>
    </div>
  </div>

  <!-- 3 BLOCS CLÉS -->
  <div class="enterprise-grid">
    <article class="enterprise-card">
      <h3 class="enterprise-card-title">
        <i class="fa-solid fa-building-shield"></i> Entité : Sûreté ferroviaire
      </h3>
      <p class="enterprise-card-text">
        Prévenir, détecter et traiter les risques sur le réseau. Coordination avec forces de l’ordre & directions internes.
      </p>
      <ul class="enterprise-list">
        <li>Protection des personnes & biens</li>
        <li>Analyse & veille opérationnelle</li>
        <li>Outils & procédures dédiés</li>
      </ul>
    </article>

    <article class="enterprise-card">
      <h3 class="enterprise-card-title">
        <i class="fa-solid fa-diagram-project"></i> Projets
      </h3>
      <p class="enterprise-card-text">
        Applications internes pour améliorer fiabilité & qualité (périmètre non public).
      </p>
      <ul class="enterprise-list">
        <li>Approche agile</li>
        <li>Tests & recette avant déploiement</li>
        <li>Qualité, traçabilité, conformité</li>
      </ul>
    </article>

    <article class="enterprise-card">
      <h3 class="enterprise-card-title">
        <i class="fa-solid fa-person-chalkboard"></i> Mon rôle : Testeur & Recetteur
      </h3>
      <p class="enterprise-card-text">
        Conception/exécution de scénarios, suivi d’anomalies, retours d’amélioration continue.
      </p>
      <ul class="enterprise-list">
        <li>Jeux de tests & cas limites</li>
        <li>Reporting clair aux équipes</li>
        <li>Focus UX/fiabilité</li>
      </ul>
    </article>
  </div>

    <div class="enterprise-more">
        <a href="view/entreprise.html" class="enterprise-btn">En savoir plus</a>
    </div>
</section>




            <br>
            <br>
            
        <br><br><h2>Mon Parcours :</h2>
        <br>
        <hr>
        <br>
        <br>
        <section id="parcours" class="timeline">
            <div class="timeline-item">
                <div class="timeline-date">2019</div>
                <div class="timeline-content">
                    <h3>École d'hôtellerie en Italie</h3>
                    <p>J'ai terminé l'école d'hôtellerie et je suis parti à Milan pour une formation en mixologie.</p>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-date">Octobre 2019</div>
                <div class="timeline-content">
                    <h3>Formation Mixology Academy</h3>
                    <p>J'ai suivi une formation reconnue en Europe pour devenir barman professionnel.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">Mars 2020</div>
                <div class="timeline-content">
                    <h3>La Felicità-Big Mamma</h3>
                    <p>J'ai intégré La Felicità à Paris et acquis une solide expérience en tant que chef d'équipe.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">2023</div>
                <div class="timeline-content">
                    <h3>Le Grand Mazarin</h3>
                    <p>J'ai découvert le monde du luxe en tant que barman dans un hôtel prestigieux.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">Octobre 2024</div>
                <div class="timeline-content">
                    <h3>Inscription au CFA Insta</h3>
                    <p>Après une longue réflexion, j'ai décidé de me réorienter et de suivre ma passion.</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-date">Septembre 2025</div>
                <div class="timeline-content">
                    <h3>SNCF Sûreté</h3>
                    <p>Après une année en initiale, j'ai trouvé une entreprise d'accueil pour la deuxième année de BTS</p>
                </div>
            </div>
        </section>
        <br>
        <br>
        <h2>Certifications</h2>
        <br><hr><br><br>
        <section id="certification" class="certifications">
            <div class="certification-card coming-soon">
                <p>🎓 Bientôt disponible !</p>
                <small>Des certifications seront ajoutées prochainement pour valider mes compétences.</small>
            </div>
        </section>
        <br><br><h2>Mes projets :</h2>
        <br><hr><br><br>
        <section id="projets" class="">
            <div class="projects-container">
                <div class="card">
                    <img src="img/glpi.png" alt="Page de connexion GLPI.">
                    <div class="card-content">
                        <h3>GLPI</h3>
                        <p>Installation et configuration de GLPI sur une VM Debian 12.</p><br>
                        <p class="technologies">Linux</p>
                        <a href="https://docs.google.com/presentation/d/1ZuUFy8vFfI9jE3_-yjgGzLP-5aLF-3zwtS6DSOXLsPM/preview" target="_blank" class="btn">Voir le projet</a>
                    </div>
                </div>
            
                <div class="card">
                    <img src="img/E-enseignement.PNG" alt="Page de connexion e-enseignement">
                    <div class="card-content">
                        <h3>E-Enseignement</h3>
                        <p>Création d'un site de e-enseignement pour le CFA-INSTA.</p>
                        <p class="technologies">Html et CSS</p>
                        <a href="https://docs.google.com/presentation/d/1NT41lHqRkGm5MV2FrqArbkI0T5WwM0v_Y-G1B9eeyws/preview" target="_blank" class="btn">Voir le projet</a>
                    </div>
                </div>

                <div class="card">
                    <img src="img/GymFit.PNG" alt="Page de connexion GymFit">
                    <div class="card-content">
                        <h3>GymFit</h3>
                        <p>Création d'une application web pour la gestion de la salle de gym GymFit.</p>
                        <p class="technologies">PHP SQL HTML CSS</p>
                        <a href="https://www.canva.com/design/DAGrFHy9Bq8/k7tobEpSRi5US6xDMig_cw/edit?utm_content=DAGrFHy9Bq8&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" target="_blank" class="btn">Voir le projet</a>
                    </div>
                </div>

                <div class="card">
                    <img src="img/Capture.accueil.PNG" alt="Page d'accueil TravelCase'">
                    <div class="card-content">
                        <h3>Travel Casee</h3>
                        <p>Création d'une boutique en ligne pour la start-up TravelCase.</p>
                        <p class="technologies">Shopify</p>
                        <a href="https://docs.google.com/presentation/d/172-FZ1QRETqnLnFjrHs_ylX7sWhxGlAtP6dRJ499584/preview" target="_blank" class="btn">Voir le projet</a>
                    </div>
                </div>

            </div>
        </section>
        <br><br>
        <h2>Veille Technologique</h2>
        <br><hr>
        <section id="veille" class="veille-section">            
            <div class="veille-intro">
                <p>
                    La veille technologique consiste à se tenir informé des évolutions dans le domaine informatique. Elle me permet d’adapter mes compétences, de suivre les bonnes pratiques, et de rester à jour sur des sujets essentiels pour mon apprentissage.
                </p>
                <p>
                    Ma veille technologique se concentre sur l'écosystème <strong>PHP</strong>. Je surveille activement les évolutions du langage (versions 8.x), les améliorations de sécurité, ainsi que les mises à jour majeures des frameworks les plus utilisés comme <strong>Symfony</strong> et <strong>Laravel</strong>.
                </p>
            </div>

            <div class="veille-tools">
                <a href="https://blog.jetbrains.com/phpstorm/" target="_blank" style="text-decoration:none;">
                    <span><i class="fa-solid fa-laptop-code"></i> JetBrains Blog</span>
                </a>

                <a href="https://stackoverflow.com/questions/tagged/php+security" target="_blank" style="text-decoration:none;">
                    <span><i class="fa-brands fa-stack-overflow"></i> StackOverflow</span>
                </a>

                <a href="https://stitcher.io/" target="_blank" style="text-decoration:none;">
                    <span><i class="fa-solid fa-book-open"></i> Stitcher.io</span>
                </a>
            </div>

            <div class="veille-grid">
                
                <article class="veille-card">
                    <div class="veille-icon">
                        <i class="fa-brands fa-php"></i>
                    </div>
                    <div class="veille-content">
                        <h3>Les nouveautés PHP 8.x</h3>
                        <p>Analyse des dernières versions (8.3 et 8.4) : typage plus strict, amélioration des classes <em>Readonly</em>, et nouvelles fonctions comme <code>json_validate()</code>.</p>
                        
                        <div class="veille-tags">
                            <span class="tag">Performance</span>
                            <span class="tag">JIT Compiler</span>
                        </div>

                        <a href="view/veille-detail.php?sujet=php" class="veille-btn">
                            Voir le dossier <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="veille-card">
                    <div class="veille-icon">
                        <i class="fa-solid fa-database"></i>
                    </div>
                    <div class="veille-content">
                        <h3>PDO & SQL</h3>
                        <p>Maîtrise de l'interface d'abstraction de données. Focus sur les requêtes préparées, les transactions et la gestion des exceptions.</p>
                        
                        <div class="veille-tags">
                            <span class="tag">SQL Injection</span>
                            <span class="tag">Transactions</span>
                        </div>

                        <a href="view/veille-detail.php?sujet=pdo" class="veille-btn">
                            Voir le dossier <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="veille-card">
                    <div class="veille-icon">
                        <i class="fa-solid fa-shield-virus"></i>
                    </div>
                    <div class="veille-content">
                        <h3>Sécurité Web</h3>
                        <p>Veille sur les vulnérabilités courantes (OWASP) dans les applications PHP. Utilisation des outils d'analyse statique comme PHPStan.</p>
                        
                        <div class="veille-tags">
                            <span class="tag">OWASP</span>
                            <span class="tag">PHPStan</span>
                        </div>

                        <a href="view/veille-detail.php?sujet=securite" class="veille-btn">
                            Voir le dossier <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="veille-card">
                    <div class="veille-icon">
                        <i class="fa-solid fa-paper-plane"></i>
                    </div>
                    <div class="veille-content">
                        <h3>PHPMailer & SMTP</h3>
                        <p>Veille sur l'envoi d'emails : authentification <strong>OAuth2</strong> et conformité avec les normes <strong>SPF/DKIM</strong>.</p>
                        <br>
                        <div class="veille-tags">
                            <span class="tag">SMTP</span>
                            <span class="tag">Délivrabilité</span>
                        </div>

                        <a href="view/veille-detail.php?sujet=mailer" class="veille-btn">
                            Voir le dossier <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

            </div>
        </section>

        
        <section id="contacts" class="contacts">
            <footer class="footer">
                <div class="contact-section">
                    <h2>Contacts</h2>
                    <p>Une question, un projet, une collaboration ?</p>
                    <a href="view/contact.php" class="contact-button">Me contacter</a>
                </div>
                <div class="footer-content">
                    <div class="footer-section">
                        <h3>Contacts</h3>
                        <p>Email : <a href="mailto:boninoleonardo@gmail.com">boninoleonardo@gmail.com</a></p>
                        <p>Téléphone : <a href="tel:+33749034251">+33 7 49 03 42 51</a></p>
                    </div>

                    <div class="footer-section">
                        <h3>Réseaux Sociaux</h3>
                        <div class="social-icons">
                            <a href="https://www.linkedin.com/in/leonardo-bonino-b71078244" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="https://www.instagram.com/leonardo_bonino_/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://github.com/LeonardoBnn" target="_blank"><i class="fa-brands fa-github"></i></a>
                        </div>
                    </div>

                    <div class="footer-section">
                        <h3>Adresse</h3>
                        <p>Rue de Reuilly, Paris, France</p>
                    </div>
                </div>
            </footer>
        </section>
    </main>
    
</html>