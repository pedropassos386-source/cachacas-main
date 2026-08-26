/* ==========================================
   FESTIVAL DA CACHAÇA
========================================== */

(() => {

    "use strict";

    const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)");

    const festivalData = [

    /* ======================
       SEXTA-FEIRA
    ====================== */

    {
        dia: "Sexta-feira",

        principal: {
            nome: "Ícaro e Gilmar",
            horario: "00:00",
            imagem: "./assets/img/artistas/artista-quinta.jpg"
        },

        outros: [
            {
                nome: "Sergio Silva",
                descricao: "Abertura",
                horario: "00:00"
            },

            {
                nome: "Edvania Souza",
                descricao: "Show",
                horario: "00:00"
            },

            {
                nome: "Winição do Piseiro",
                descricao: "Show",
                horario: "00:00"
            }
        ]
    },


    /* ======================
       SÁBADO
    ====================== */

    {
        dia: "Sábado",

        principal: {
            nome: "Raí Saia Rodada",
            horario: "00:00",
            imagem: "./assets/img/artistas/artista-sexta.jpg"
        },

        outros: [
            {
                nome: "Amanda Alves",
                descricao: "Abertura",
                horario: "00:00"
            },

            {
                nome: "Cristian Fernandes",
                descricao: "Show",
                horario: "00:00"
            },

            {
                nome: "DJ Veneno",
                descricao: "Show",
                horario: "00:00"
            }
        ]
    },


    /* ======================
       DOMINGO
    ====================== */

    {
        dia: "Domingo",

        principal: {
            nome: "The Fevers",
            horario: "00:00",
            imagem: "./assets/img/artistas/artista-domingo.jpg"
        },

        outros: [
            {
                nome: "Animaê Infantil",
                descricao: "Abertura",
                horario: "00:00"
            },

            {
                nome: "Pagodão S.A",
                descricao: "Show",
                horario: "00:00"
            },

            {
                nome: "Rick Swingão",
                descricao: "Show",
                horario: "00:00"
            }
        ]
    }

];


    const showcase =
        document.querySelector("#festival-showcase");

    if (!showcase) {
        return;
    }


    const mainImage =
        document.querySelector("#festival-main-image");

    const mainName =
        document.querySelector("#festival-main-name");

    const mainTime =
        document.querySelector("#festival-main-time");

    const currentDay =
        document.querySelector("#festival-current-day");

    const lineup =
        document.querySelector("#festival-lineup");


    const dayButtons =
        document.querySelectorAll(".festival-day");

    const indicators =
        document.querySelectorAll(".festival-indicator");

    if (!mainImage || !mainName || !mainTime || !currentDay || !lineup || dayButtons.length !== festivalData.length) {
        return;
    }


    let currentIndex = 0;

    let festivalInterval;


    /* ==========================================
       CRIAR LISTA DE ARTISTAS
    ========================================== */

    function createLineup(artists) {

        lineup.replaceChildren();


        artists.forEach((artist, index) => {

            const card = document.createElement("div");


            card.classList.add(
                "festival-artist"
            );


            if (!reducedMotion.matches) card.style.animationDelay = `${index * 0.12}s`;
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


    /* ==========================================
       ATUALIZAR BOTÕES
    ========================================== */

    function updateButtons(index) {

        dayButtons.forEach(
            (button, buttonIndex) => {

                button.classList.toggle(
                    "active",
                    buttonIndex === index
                );
                button.setAttribute("aria-selected", String(buttonIndex === index));
                button.tabIndex = buttonIndex === index ? 0 : -1;

            }
        );


        indicators.forEach(
            (indicator, indicatorIndex) => {

                indicator.classList.toggle(
                    "active",
                    indicatorIndex === index
                );
                indicator.setAttribute("aria-current", indicatorIndex === index ? "true" : "false");

            }
        );

    }


    /* ==========================================
       TROCAR DIA
    ========================================== */

    function showFestivalDay(index) {

        const data =
            festivalData[index];


        if (!data) return;
        if (!reducedMotion.matches) showcase.classList.add("is-changing");


        window.setTimeout(() => {

            currentDay.textContent =
                data.dia;


            mainName.textContent =
                data.principal.nome;


            mainTime.textContent =
                data.principal.horario;


            mainImage.src =
                data.principal.imagem;


            mainImage.alt =
                `Atração principal de ${data.dia}`;


            createLineup(
                data.outros
            );


            updateButtons(index);


            showcase.classList.remove(
                "is-changing"
            );


            currentIndex = index;

        }, reducedMotion.matches ? 0 : 350);

    }


    /* ==========================================
       PRÓXIMO DIA
    ========================================== */

    function nextFestivalDay() {

        const nextIndex =
            (currentIndex + 1)
            % festivalData.length;


        showFestivalDay(
            nextIndex
        );

    }


    /* ==========================================
       TROCA AUTOMÁTICA
    ========================================== */

    function startFestivalInterval() {

        clearInterval(
            festivalInterval
        );


        if (!reducedMotion.matches && !document.hidden) festivalInterval = window.setInterval(nextFestivalDay, 7000);

    }


    /* ==========================================
       BOTÕES DOS DIAS
    ========================================== */

    dayButtons.forEach(
        (button) => {

            button.addEventListener(
                "click",
                () => {

                    const index =
                        Number(
                            button.dataset
                                .festivalIndex
                        );


                    showFestivalDay(
                        index
                    );


                    startFestivalInterval();

                }
            );

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

        }
    );

    document.addEventListener("visibilitychange", startFestivalInterval);
    reducedMotion.addEventListener("change", startFestivalInterval);


    /* ==========================================
       INDICADORES
    ========================================== */

    indicators.forEach(
        (indicator) => {

            indicator.addEventListener(
                "click",
                () => {

                    const index =
                        Number(
                            indicator.dataset
                                .festivalIndex
                        );


                    showFestivalDay(
                        index
                    );


                    startFestivalInterval();

                }
            );

        }
    );


    /* ==========================================
       INICIAR
    ========================================== */

    showFestivalDay(0);

    startFestivalInterval();

})();
