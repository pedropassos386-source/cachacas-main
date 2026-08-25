/* ==========================================
   FESTIVAL DA CACHAÇA
========================================== */

(() => {

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


    let currentIndex = 0;

    let festivalInterval;


    /* ==========================================
       CRIAR LISTA DE ARTISTAS
    ========================================== */

    function createLineup(artists) {

        lineup.innerHTML = "";


        artists.forEach((artist, index) => {

            const card =
                document.createElement("div");


            card.classList.add(
                "festival-artist"
            );


            card.style.animationDelay =
                `${index * 0.12}s`;


            card.innerHTML = `

                <div class="festival-artist-name">

                    <strong>
                        ${artist.nome}
                    </strong>

                    <span>
                        ${artist.descricao}
                    </span>

                </div>


                <span class="festival-artist-time">
                    ${artist.horario}
                </span>

            `;


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

            }
        );


        indicators.forEach(
            (indicator, indicatorIndex) => {

                indicator.classList.toggle(
                    "active",
                    indicatorIndex === index
                );

            }
        );

    }


    /* ==========================================
       TROCAR DIA
    ========================================== */

    function showFestivalDay(index) {

        const data =
            festivalData[index];


        showcase.classList.add(
            "is-changing"
        );


        setTimeout(() => {

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

        }, 350);

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


        festivalInterval =
            setInterval(
                nextFestivalDay,
                7000
            );

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

        }
    );


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