(() => {
    "use strict";
    const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)");

    function initCarousel() {
        const section = document.querySelector(".cachacas-section");
        const next = document.querySelector(".go-forward");
        const previous = document.querySelector(".go-back");
        if (!section || !next || !previous) return;
        const cards = Array.from(section.querySelectorAll(".cards"));
        if (!cards.length) return;
        let currentIndex = 0;
        let intervalId;
        let resizeFrame;
        const cardsPerPage = () => window.innerWidth <= 600 ? 1 : window.innerWidth <= 900 ? 2 : 4;

        function update() {
            const visible = Math.min(cardsPerPage(), cards.length);
            cards.forEach((card) => { card.hidden = true; card.classList.remove("fade-in"); });
            for (let offset = 0; offset < visible; offset += 1) {
                const card = cards[(currentIndex + offset) % cards.length];
                card.hidden = false;
                if (!reducedMotion.matches) card.classList.add("fade-in");
            }
        }
        const move = (direction) => { currentIndex = (currentIndex + direction + cards.length) % cards.length; update(); };
        const stop = () => { window.clearInterval(intervalId); intervalId = undefined; };
        const start = () => {
            stop();
            if (!reducedMotion.matches && !document.hidden) intervalId = window.setInterval(() => move(1), 4000);
        };
        next.addEventListener("click", () => { move(1); start(); });
        previous.addEventListener("click", () => { move(-1); start(); });
        section.addEventListener("mouseenter", stop);
        section.addEventListener("mouseleave", start);
        section.addEventListener("focusin", stop);
        section.addEventListener("focusout", start);
        document.addEventListener("visibilitychange", start);
        reducedMotion.addEventListener("change", start);
        window.addEventListener("resize", () => {
            window.cancelAnimationFrame(resizeFrame);
            resizeFrame = window.requestAnimationFrame(update);
        }, { passive: true });
        update();
        start();
    }

    function initBannerPhrases() {
        const text = document.querySelector("#frase-dinamica");
        if (!text || reducedMotion.matches) return;
        const phrases = ["Novo Cruzeiro: tradição em cada dose.", "Sabores que contam a nossa história.", "Conheça as cachaças da nossa terra.", "Histórias que nascem nos alambiques.", "Um brinde à cultura de Novo Cruzeiro.", "Festival da Cachaça: tradição que atravessa gerações."];
        let index = 0;
        window.setInterval(() => {
            text.classList.add("fade-out");
            window.setTimeout(() => {
                index = (index + 1) % phrases.length;
                text.textContent = phrases[index];
                text.classList.remove("fade-out");
            }, 500);
        }, 6000);
    }
    initCarousel();
    initBannerPhrases();
})();
