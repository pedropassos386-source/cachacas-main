/* ==========================================
   FESTIVAL DA CACHAÇA
========================================== */

(() => {
    "use strict";

    const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)");
    const horarioPendente = "Horário a confirmar";

    // A distribuição das atrações por dia permanece conforme o material
    // atualmente cadastrado no site. Revisar com fonte oficial antes da publicação.
    const festivalData = [
        {
            dia: "Sexta-feira",
            principal: {
                nome: "Ícaro e Gilmar",
                horario: horarioPendente,
                imagem: "./assets/img/artistas/icaro-gilmar.jpg"
            },
            outros: [
                { nome: "Sérgio Silva", descricao: "Abertura", horario: horarioPendente },
                { nome: "Edvania Souza", descricao: "Show", horario: horarioPendente },
                { nome: "Winição do Piseiro", descricao: "Show", horario: horarioPendente }
            ]
        },
        {
            dia: "Sábado",
            principal: {
                nome: "Raí Saia Rodada",
                horario: horarioPendente,
                imagem: "./assets/img/artistas/rai-saia-rodada.jpg"
            },
            outros: [
                { nome: "Amanda Alves", descricao: "Abertura", horario: horarioPendente },
                { nome: "Cristian Fernandes", descricao: "Show", horario: horarioPendente },
                { nome: "DJ Veneno", descricao: "Show", horario: horarioPendente }
            ]
        },
        {
            dia: "Domingo",
            principal: {
                nome: "The Fevers",
                horario: horarioPendente,
                imagem: "./assets/img/artistas/the-fevers.jpg"
            },
            outros: [
                { nome: "Animaê Infantil", descricao: "Abertura", horario: horarioPendente },
                { nome: "Pagodão S.A", descricao: "Show", horario: horarioPendente },
                { nome: "Rick Swingão", descricao: "Show", horario: horarioPendente }
            ]
        }
    ];

    const showcase = document.querySelector("#festival-showcase");
    if (!showcase) return;

    const mainImage = document.querySelector("#festival-main-image");
    const mainName = document.querySelector("#festival-main-name");
    const mainTime = document.querySelector("#festival-main-time");
    const currentDay = document.querySelector("#festival-current-day");
    const lineup = document.querySelector("#festival-lineup");
    const dayButtons = document.querySelectorAll(".festival-day");
    const indicators = document.querySelectorAll(".festival-indicator");

    if (!mainImage || !mainName || !mainTime || !currentDay || !lineup || dayButtons.length !== festivalData.length) {
        return;
    }

    let currentIndex = 0;
    let festivalInterval;

    function createLineup(artists) {
        lineup.replaceChildren();

        artists.forEach((artist, index) => {
            const card = document.createElement("div");
            card.className = "festival-artist";

            if (!reducedMotion.matches) {
                card.style.animationDelay = `${index * 0.12}s`;
            }

            const name = document.createElement("div");
            name.className = "festival-artist-name";

            const strong = document.createElement("strong");
            strong.textContent = artist.nome;

            const description = document.createElement("span");
            description.textContent = artist.descricao;

            const time = document.createElement("span");
            time.className = "festival-artist-time";
            time.textContent = artist.horario;

            name.append(strong, description);
            card.append(name, time);
            lineup.appendChild(card);
        });
    }

    function updateButtons(index) {
        dayButtons.forEach((button, buttonIndex) => {
            const isActive = buttonIndex === index;
            button.classList.toggle("active", isActive);
            button.setAttribute("aria-selected", String(isActive));
            button.tabIndex = isActive ? 0 : -1;
        });

        indicators.forEach((indicator, indicatorIndex) => {
            const isActive = indicatorIndex === index;
            indicator.classList.toggle("active", isActive);
            indicator.setAttribute("aria-current", isActive ? "true" : "false");
        });
    }

    function showFestivalDay(index) {
        const data = festivalData[index];
        if (!data) return;

        if (!reducedMotion.matches) {
            showcase.classList.add("is-changing");
        }

        window.setTimeout(() => {
            currentDay.textContent = data.dia;
            mainName.textContent = data.principal.nome;
            mainTime.textContent = data.principal.horario;
            mainImage.src = data.principal.imagem;
            mainImage.alt = `Atração principal de ${data.dia}`;

            createLineup(data.outros);
            updateButtons(index);
            showcase.classList.remove("is-changing");
            currentIndex = index;
        }, reducedMotion.matches ? 0 : 350);
    }

    function nextFestivalDay() {
        showFestivalDay((currentIndex + 1) % festivalData.length);
    }

    function stopFestivalInterval() {
        window.clearInterval(festivalInterval);
        festivalInterval = undefined;
    }

    function startFestivalInterval() {
        stopFestivalInterval();

        if (!reducedMotion.matches && !document.hidden) {
            festivalInterval = window.setInterval(nextFestivalDay, 7000);
        }
    }

    dayButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const index = Number(button.dataset.festivalIndex);
            showFestivalDay(index);
            startFestivalInterval();
        });

        button.addEventListener("keydown", (event) => {
            if (event.key !== "ArrowLeft" && event.key !== "ArrowRight") return;

            event.preventDefault();
            const current = Number(button.dataset.festivalIndex);
            const direction = event.key === "ArrowRight" ? 1 : -1;
            const index = (current + direction + dayButtons.length) % dayButtons.length;

            showFestivalDay(index);
            dayButtons[index].focus();
            startFestivalInterval();
        });
    });

    indicators.forEach((indicator) => {
        indicator.addEventListener("click", () => {
            const index = Number(indicator.dataset.festivalIndex);
            showFestivalDay(index);
            startFestivalInterval();
        });
    });

    document.addEventListener("visibilitychange", startFestivalInterval);

    if (typeof reducedMotion.addEventListener === "function") {
        reducedMotion.addEventListener("change", startFestivalInterval);
    } else if (typeof reducedMotion.addListener === "function") {
        reducedMotion.addListener(startFestivalInterval);
    }

    showFestivalDay(0);
    startFestivalInterval();
})();
