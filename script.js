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

    const text = "Je suis actuellement étudiant au centre de ...t les projets que je développe actuellement. Bonne lecture !";
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
            cvFrame.setAttribute("src", "CV_Leonardo_Bonino.pdf");
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
