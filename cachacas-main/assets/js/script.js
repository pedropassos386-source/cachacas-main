const section = document.querySelector(".cachacas-section");
const cards = Array.from(section.querySelectorAll(".cards"));
const next = document.querySelector(".go-forward");
const prev = document.querySelector(".go-back");

const cardsPerPage = 3;
let currentIndex = 0;

function animateCards(startIndex) {
    for (let i = startIndex; i < startIndex + cardsPerPage && i < cards.length; i++) {
        const card = cards[i];

        // remove animação anterior
        card.classList.remove("fade-in");
        card.style.animationDelay = "0s";

        // força reflow
        void card.offsetHeight;

        // reaplica animação imediatamente
        card.classList.add("fade-in");
        card.style.animationDelay = `${(i - startIndex) * 0.1}s`;
    }
}

function updateCarousel() {
    cards.forEach(card => {
        card.style.display = "none";
    });

    for (let i = currentIndex; i < currentIndex + cardsPerPage && i < cards.length; i++) {
        cards[i].style.display = "flex";
    }

    animateCards(currentIndex);

    prev.style.opacity = currentIndex === 0 ? "0.5" : "1";
    prev.style.pointerEvents = currentIndex === 0 ? "none" : "auto";

    next.style.opacity = currentIndex + cardsPerPage >= cards.length ? "0.5" : "1";
    next.style.pointerEvents = currentIndex + cardsPerPage >= cards.length ? "none" : "auto";
}

next.addEventListener("click", () => {
    if (currentIndex + cardsPerPage < cards.length) {
        currentIndex += cardsPerPage;
        updateCarousel();
    }
});

prev.addEventListener("click", () => {
    if (currentIndex - cardsPerPage >= 0) {
        currentIndex -= cardsPerPage;
        updateCarousel();
    }
});

updateCarousel();
