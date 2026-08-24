const section = document.querySelector(".cachacas-section");
const cards = Array.from(section.querySelectorAll(".cards"));
const next = document.querySelector(".go-forward");
const prev = document.querySelector(".go-back");

const mobile = window.matchMedia("(max-width: 768px)");

let cardsPerPage = mobile.matches ? 1 : 3;
let currentIndex = 0;

function animateCards(startIndex) {
    for (
        let i = startIndex;
        i < startIndex + cardsPerPage && i < cards.length;
        i++
    ) {
        const card = cards[i];

        // remove animação anterior
        card.classList.remove("fade-in");
        card.style.animationDelay = "0s";

        // força reflow
        void card.offsetHeight;

        // reaplica animação
        card.classList.add("fade-in");
        card.style.animationDelay = `${(i - startIndex) * 0.1}s`;
    }
}

function updateCarousel() {

    // esconde todos os cards
    cards.forEach(card => {
        card.style.display = "none";
    });

    // mostra apenas a quantidade definida em cardsPerPage
    for (
        let i = currentIndex;
        i < currentIndex + cardsPerPage && i < cards.length;
        i++
    ) {
        cards[i].style.display = "flex";
    }

    animateCards(currentIndex);

    // botão voltar
    prev.style.opacity =
        currentIndex === 0 ? "0.5" : "1";

    prev.style.pointerEvents =
        currentIndex === 0 ? "none" : "auto";

    // botão avançar
    next.style.opacity =
        currentIndex + cardsPerPage >= cards.length
            ? "0.5"
            : "1";

    next.style.pointerEvents =
        currentIndex + cardsPerPage >= cards.length
            ? "none"
            : "auto";
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


// MUDANÇA AUTOMÁTICA ENTRE MOBILE E DESKTOP
mobile.addEventListener("change", (event) => {

    if (event.matches) {
        // 768px ou menor
        cardsPerPage = 1;
    } else {
        // maior que 768px
        cardsPerPage = 3;
    }

    // volta para o começo do carrossel
    currentIndex = 0;

    // redesenha o carrossel
    updateCarousel();
});


// inicia o carrossel
updateCarousel();

const frases = [
    "Novo Cruzeiro: tradição em cada dose.",
    "Sabores que contam a nossa história.",
    "Conheça as cachaças da nossa terra.",
    "Histórias que nascem nos alambiques.",
    "Um brinde à cultura de Novo Cruzeiro.",
    "Festival da Cachaça: tradição que atravessa gerações."
];

const texto = document.querySelector("#frase-dinamica");

let fraseAtual = 0;

function trocarFrase() {

    // desaparece
    texto.classList.add("fade-out");

    setTimeout(() => {

        // passa para a próxima frase
        fraseAtual++;

        if (fraseAtual >= frases.length) {
            fraseAtual = 0;
        }

        texto.textContent = frases[fraseAtual];

        // aparece novamente
        texto.classList.remove("fade-out");

    }, 500);
}

setInterval(trocarFrase, 6000);