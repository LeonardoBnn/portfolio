document.addEventListener("DOMContentLoaded", function () {
    const text = "Je suis actuellement étudiant au centre de formation CFA INSTA à Paris, en première année de BTS SIO  avec une spécialisation en SLAM. Originaire d’Italie, j’ai grandi là-bas avant de m’installer en France en 2020, où j’ai exercé le métier de barman. Cette expérience m’a beaucoup appris sur moi-même et restera gravée en moi grâce aux rencontres et aux souvenirs qu’elle m’a offerts. Aujourd’hui, je suis en pleine reconversion professionnelle. Après une profonde réflexion, j’ai décidé de me tourner vers l’informatique, une passion qui m’anime depuis mon plus jeune âge. Bien que le métier de barman m’ait beaucoup apporté, j’ai ressenti le besoin d’explorer ce domaine qui me fascine tant. À travers ce site, vous découvrirez mon école, ma formation et les projets que je développe actuellement. Bonne lecture !";

    let index = 0;
    const speed = 55;
    const typedTextElement = document.getElementById("typed-text");

    if (typedTextElement) { // ✅ Vérifier que l'élément existe
        function typeText() {
            if (index < text.length) {
                typedTextElement.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeText, speed);
            }
        }

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting && index === 0) {
                    typedTextElement.style.opacity = 1;
                    typeText();
                }
            });
        }, { threshold: 0.5 });

        observer.observe(typedTextElement);
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const cvButton = document.getElementById("cvButton");
    const cvModal = document.getElementById("cvModal");
    const cvFrame = document.getElementById("cvFrame");
    const closeButton = document.querySelector(".close");

    if (cvButton && cvModal && cvFrame) {
        // 🔥 Supprimer tout src pour éviter l'ouverture automatique
        cvFrame.removeAttribute("src");

        cvButton.addEventListener("click", function (event) {
            event.preventDefault(); // 🚫 Bloque toute navigation automatique
            event.stopPropagation(); // 🚫 Empêche la propagation du clic

            // 🔥 Ne charge le fichier PDF qu'au premier clic
            if (!cvFrame.src || cvFrame.src === "about:blank") {
                cvFrame.setAttribute("src", "CV_Leonardo_Bonino.pdf"); // ✅ Remplace par le chemin réel
            }

            cvFrame.style.display = "block";
            cvModal.style.display = "flex";
        });
    }

    if (closeButton && cvModal) {
        closeButton.addEventListener("click", function () {
            cvModal.style.display = "none";
        });

        window.addEventListener("click", function (event) {
            if (event.target === cvModal) {
                cvModal.style.display = "none";
            }
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const btsContainer = document.querySelector(".bts-container");

    function handleScroll() {
        const scrollPosition = window.scrollY + window.innerHeight;
        const elementPosition = btsContainer.offsetTop;

        if (scrollPosition > elementPosition + 100) {
            btsContainer.classList.add("show");
        }
    }

    window.addEventListener("scroll", handleScroll);
});

document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".timeline-item");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting && !entry.target.classList.contains("visible")) {
                entry.target.classList.add("visible");

                setTimeout(() => {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = "translateY(0)";
                }, index * 4000);

                observer.unobserve(entry.target); // Stop observer une fois visible
            }
        });
    }, {
        threshold: 0.1 // Détecte quand 10% de l'élément est visible
    });

    items.forEach(item => {
        observer.observe(item);
    });
});

document.querySelectorAll('.timeline-item').forEach((item, index) => {
    item.classList.add(index % 2 === 0 ? 'left' : 'right');
});
