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
        <div class="social">
            <a href="https://www.linkedin.com/in/leonardo-bonino-b71078244"><i class="fa-brands fa-linkedin"></i></a>
            <a href="mailto:boninoleonardo@gmail.com"><i class="fa-regular fa-paper-plane"></i></a>
        </div>
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
        <section id="parcours" class="parcours">
        </section>
        <section id="projets" class="projets">
        </section>
        <section id="contacts" class="contacts">
        </section>
    </div>
    
    <script src="script.js"></script>
</html>