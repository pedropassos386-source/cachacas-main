const section = document.querySelector(".cachacas-section");

const cards = Array.from(
    section.querySelectorAll(".cards")
);

const next = document.querySelector(".go-forward");
const prev = document.querySelector(".go-back");

let currentIndex = 0;
let carouselInterval;

const AUTO_DELAY = 4000;


/* ==========================================
   QUANTIDADE DE CARDS VISÍVEIS
========================================== */

function getCardsPerPage() {

    if (window.innerWidth <= 600) {
        return 1;
    }

    if (window.innerWidth <= 900) {
        return 2;
    }

    return 4;
}


/* ==========================================
   ATUALIZAR CARROSSEL
========================================== */

function updateCarousel() {

    const cardsPerPage = getCardsPerPage();

    /* esconde todos */

    cards.forEach(card => {

        card.style.display = "none";

        card.classList.remove("fade-in");

    });


    /*
     Mostra a quantidade necessária.
     O % faz o carrossel voltar para
     o início automaticamente.
    */

    for (let i = 0; i < cardsPerPage; i++) {

        const cardIndex =
            (currentIndex + i) % cards.length;

        const card = cards[cardIndex];

        card.style.display = "flex";

        card.style.animationDelay =
            `${i * 0.1}s`;

        void card.offsetHeight;

        card.classList.add("fade-in");

    }

}


/* ==========================================
   PRÓXIMA CACHAÇA
========================================== */

function nextCard() {

    currentIndex =
        (currentIndex + 1) % cards.length;

    updateCarousel();

}


/* ==========================================
   CACHAÇA ANTERIOR
========================================== */

function previousCard() {

    currentIndex =
        (currentIndex - 1 + cards.length)
        % cards.length;

    updateCarousel();

}


/* ==========================================
   TROCA AUTOMÁTICA
========================================== */

function startCarousel() {

    clearInterval(carouselInterval);

    carouselInterval = setInterval(
        nextCard,
        AUTO_DELAY
    );

}


/* ==========================================
   SETA DIREITA
========================================== */

next.addEventListener("click", () => {

    nextCard();

    startCarousel();

});


/* ==========================================
   SETA ESQUERDA
========================================== */

prev.addEventListener("click", () => {

    previousCard();

    startCarousel();

});


/* ==========================================
   PAUSA AO PASSAR O MOUSE
========================================== */

section.addEventListener("mouseenter", () => {

    clearInterval(carouselInterval);

});


section.addEventListener("mouseleave", () => {

    startCarousel();

});


/* ==========================================
   RESPONSIVIDADE
========================================== */

window.addEventListener("resize", () => {

    updateCarousel();

});


/* ==========================================
   INICIAR
========================================== */

updateCarousel();

startCarousel();



/* ==========================================
   FRASES DO BANNER
========================================== */

const frases = [

    "Novo Cruzeiro: tradição em cada dose.",

    "Sabores que contam a nossa história.",

    "Conheça as cachaças da nossa terra.",

    "Histórias que nascem nos alambiques.",

    "Um brinde à cultura de Novo Cruzeiro.",

    "Festival da Cachaça: tradição que atravessa gerações."

];


const texto = document.querySelector(
    "#frase-dinamica"
);


let fraseAtual = 0;


/* ==========================================
   TROCAR FRASE
========================================== */

function trocarFrase() {

    texto.classList.add("fade-out");


    setTimeout(() => {

        fraseAtual++;


        if (fraseAtual >= frases.length) {

            fraseAtual = 0;

        }


        texto.textContent =
            frases[fraseAtual];


        texto.classList.remove(
            "fade-out"
        );

    }, 500);

}


/* Troca de frase a cada 6 segundos */

setInterval(
    trocarFrase,
    6000
);