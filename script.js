document.addEventListener("DOMContentLoaded", () => {
    initTypingEffect();
    initCvModal();
    initBtsReveal();
    initTimelineReveal();
    initTimelineSides();
});

function initTypingEffect() {
    const typedTextElement = document.getElementById("typed-text");
    if (!typedTextElement) return;

const text = "Je suis actuellement étudiant au centre de formation CFA INSTA à Paris, en première année de BTS SIO  avec une spécialisation en SLAM. Originaire d’Italie, j’ai grandi là-bas avant de m’installer en France en 2020, où j’ai exercé le métier de barman. Cette expérience m’a beaucoup appris sur moi-même et restera gravée en moi grâce aux rencontres et aux souvenirs qu’elle m’a offerts. Aujourd’hui, je suis en pleine reconversion professionnelle. Après une profonde réflexion, j’ai décidé de me tourner vers l’informatique, une passion qui m’anime depuis mon plus jeune âge. Bien que le métier de barman m’ait beaucoup apporté, j’ai ressenti le besoin d’explorer ce domaine qui me fascine tant. À travers ce site, vous découvrirez mon école, ma formation et les projets que je développe actuellement. Bonne lecture !";
    let index = 0;
    const speed = 55;

    const typeText = () => {
        if (index < text.length) {
            typedTextElement.textContent += text.charAt(index);
            index++;
            setTimeout(typeText, speed);
        }
    };

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting && index === 0) {
                    typedTextElement.style.opacity = 1;
                    typeText();
                }
            });
        },
        { threshold: 0.5 }
    );

    observer.observe(typedTextElement);
}

function initCvModal() {
    const cvButton = document.getElementById("cvButton");
    const cvModal = document.getElementById("cvModal");
    const cvFrame = document.getElementById("cvFrame");
    const closeButton = cvModal ? cvModal.querySelector(".close") : null;

    if (!cvButton || !cvModal || !cvFrame || !closeButton) return;

    // Évite le chargement automatique du PDF
    cvFrame.removeAttribute("src");

    cvButton.addEventListener("click", event => {
        event.preventDefault();

        if (!cvFrame.getAttribute("src")) {
            cvFrame.setAttribute("src", "CV_Leonardo_Bonino_ESGI.pdf");
        }

        cvModal.style.display = "flex";
    });

    closeButton.addEventListener("click", () => {
        cvModal.style.display = "none";
    });

    cvModal.addEventListener("click", event => {
        if (event.target === cvModal) {
            cvModal.style.display = "none";
        }
    });
}

function initBtsReveal() {
    const btsContainer = document.querySelector(".bts-container");
    if (!btsContainer) return;

    const handleScroll = () => {
        const scrollPosition = window.scrollY + window.innerHeight;
        const elementPosition = btsContainer.offsetTop;

        if (scrollPosition > elementPosition + 100) {
            btsContainer.classList.add("show");
            // Une fois affiché, plus besoin d’écouter le scroll
            window.removeEventListener("scroll", handleScroll);
        }
    };

    window.addEventListener("scroll", handleScroll);
    // Si la section est déjà visible au chargement
    handleScroll();
}

function initTimelineReveal() {
    const items = document.querySelectorAll(".timeline-item");
    if (!items.length) return;

    const STAGGER_DELAY = 200; // ms entre chaque item

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !entry.target.classList.contains("visible")) {
                    entry.target.classList.add("visible");

                    const index = Number(entry.target.dataset.index || 0);

                    setTimeout(() => {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = "translateY(0)";
                    }, index * STAGGER_DELAY);

                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1 }
    );

    items.forEach((item, index) => {
        item.dataset.index = index;
        observer.observe(item);
    });
}

function initTimelineSides() {
    const items = document.querySelectorAll(".timeline-item");
    if (!items.length) return;

    items.forEach((item, index) => {
        item.classList.add(index % 2 === 0 ? "left" : "right");
    });
}

document.addEventListener('DOMContentLoaded', function () {
    /* =========================
       TABS ENJEUX
       ========================= */
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabPanels = document.querySelectorAll('.tab-panel');

    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            const target = button.getAttribute('data-tab');

            // Active bouton
            tabButtons.forEach(btn => btn.classList.remove('tab-active'));
            button.classList.add('tab-active');

            // Affiche / masque les panels
            tabPanels.forEach(panel => {
                if (panel.getAttribute('data-panel') === target) {
                    panel.classList.add('tab-panel-active');
                } else {
                    panel.classList.remove('tab-panel-active');
                }
            });
        });
    });

    /* =========================
       REVEAL ON SCROLL
       ========================= */
    const revealElements = document.querySelectorAll('.reveal-on-scroll');

    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.2
        });

        revealElements.forEach(el => observer.observe(el));
    } else {
        // Fallback simple si IntersectionObserver n'est pas supporté
        revealElements.forEach(el => el.classList.add('reveal-visible'));
    }

    /* =========================
       SMOOTH SCROLL POUR ANCRES
       ========================= */
    const anchorLinks = document.querySelectorAll('a[href^="#"]');

    anchorLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId.length > 1) {
                const targetEl = document.querySelector(targetId);
                if (targetEl) {
                    e.preventDefault();
                    const offsetTop = targetEl.getBoundingClientRect().top + window.pageYOffset - 80;

                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
});
