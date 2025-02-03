<!DOCTYPE html>
<html lang="fr-FR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Leonardo Bonino</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8419f108ca.js" crossorigin="anonymous"></script>

</head>
<body>

    <div class="nav-bar">
        <img class="img-leo" src="img/cv.2.jpg" alt="photo de Leonardo Bonino">
        <a href="#bienvenue"><i class="fa-solid fa-house"></i>&nbsp; Bienvenue</a>
        <a href="#apropos"><i class="fa-regular fa-user"></i>&nbsp; À propos</a>
        <a href="#parcours"><i class="fa-solid fa-book"></i>&ensp;Parcours</a>
        <a href="#projets"><i class="fa-regular fa-folder"></i>&nbsp; Projets</a>
        <a href="#contacts"><i class="fa-regular fa-address-book"></i>&nbsp; Contacts</a>
    </div>

    <div class="main">
        <div class="bienvenue">
            <section id="bienvenue">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
                <h1>Bienvenue sur le portfolio de Leonardo Bonino</h1>
            </section>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
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
            <div id="cvModal" class="modal" style="display: none;">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <iframe id="cvFrame" width="100%" height="600px" style="display: none;"></iframe>
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
                    <h3><i class="fa-solid fa-network-wired"></i>   Option SISR</h3><br
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
            <br>
            <br>
            <h2>Évolution de mes Hard Skills :</h2>
            <br>
            <hr>
            <br>
            <div class="skills-container">

                <div class="skill">
                    <span>HTML</span>
                    <div class="progress-bar">
                        <div class="progress html">80%</div>
                    </div>
                </div>

                <div class="skill">
                    <span>CSS</span>
                    <div class="progress-bar">
                        <div class="progress css">65%</div>
                    </div>
                </div>

                <div class="skill">
                    <span>PHP</span>
                    <div class="progress-bar">
                        <div class="progress php">15%</div>
                    </div>
                </div>

                <div class="skill">
                    <span>C</span>
                    <div class="progress-bar">
                        <div class="progress c">20%</div>
                    </div>
                </div>

                <div class="skill">
                    <span>SQL</span>
                    <div class="progress-bar">
                        <div class="progress sql">15%</div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2>Mon Parcours :</h2>
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
                    <h3>Barman chez Big Mamma</h3>
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
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2>Mes projets :</h2>
        <br>
        <hr>
        <br>
        <br>
        <section id="projets" class="projets">
            <div class="projects-container">
                <div class="card">
                    <img src="img/glpi.png" alt="Page de connexion GLPI.">
                    <div class="card-content">
                        <h3>GLPI</h3>
                        <p>Installation et configuration de GLPI sur une VM Debian 12.</p>
                        <p class="technologies">Linux</p>
                        <a href="https://docs.google.com/presentation/d/1ZuUFy8vFfI9jE3_-yjgGzLP-5aLF-3zwtS6DSOXLsPM/preview" target="_blank" class="btn">Voir le projet</a>
                    </div>
                </div>

                <div class="card">
                    <img src="image-projet2.jpg" alt="Projet 2">
                    <div class="card-content">
                        <h3>Projet 2</h3>
                        <p>Description du projet.</p>
                        <p class="technologies">HTML, CSS, PHP</p>
                        <a href="lien-projet2.html" class="btn">Voir le projet</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="contacts" class="contacts">
            <footer class="footer">
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
    </div>
    
    <script src="script.js"></script>
</html>