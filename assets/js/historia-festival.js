/* ==========================================
   HISTÓRIA DO FESTIVAL DA CACHAÇA
   Novo Cruzeiro - MG
========================================== */

(() => {

    "use strict";


    /* ==========================================
       INICIAR PÁGINA
    ========================================== */

    function iniciarHistoriaFestival() {

        /* ======================================
           PROGRAMAÇÕES
        ====================================== */

        const programacoes = Array.from(
            document.querySelectorAll(
                "details.programacao"
            )
        );


        const botaoExpandir =
            document.querySelector(
                "#expandir-todos"
            );


        const botaoRecolher =
            document.querySelector(
                "#recolher-todos"
            );


        /* ======================================
           EXPANDIR TODAS
        ====================================== */

        if (botaoExpandir) {

            botaoExpandir.addEventListener(
                "click",
                () => {

                    programacoes.forEach(
                        (programacao) => {

                            programacao.open = true;

                        }
                    );

                }
            );

        }


        /* ======================================
           RECOLHER TODAS
        ====================================== */

        if (botaoRecolher) {

            botaoRecolher.addEventListener(
                "click",
                () => {

                    programacoes.forEach(
                        (programacao) => {

                            programacao.open = false;

                        }
                    );

                }
            );

        }



        /* ==========================================
           ANIMAÇÃO DA LINHA DO TEMPO
        ========================================== */

        const itensTimeline =
            document.querySelectorAll(
                ".timeline-entry.reveal"
            );


        /*
         Se não tiver itens,
         simplesmente encerra essa parte.
        */

        if (!itensTimeline.length) {
            return;
        }


        /* ======================================
           ACESSIBILIDADE
           PREFERS REDUCED MOTION
        ====================================== */

        const reduzirMovimento =
            window.matchMedia(
                "(prefers-reduced-motion: reduce)"
            ).matches;


        /*
         Se o usuário não quiser animações,
         mostra tudo imediatamente.
        */

        if (reduzirMovimento) {

            itensTimeline.forEach(
                (item) => {

                    item.classList.add(
                        "is-visible"
                    );

                }
            );

            return;

        }



        /* ======================================
           FALLBACK PARA NAVEGADORES ANTIGOS
        ====================================== */

        if (
            !("IntersectionObserver" in window)
        ) {

            itensTimeline.forEach(
                (item) => {

                    item.classList.add(
                        "is-visible"
                    );

                }
            );

            return;

        }



        /* ======================================
           OBSERVADOR DA LINHA DO TEMPO
        ====================================== */

        const observer =
            new IntersectionObserver(

                (entries) => {

                    entries.forEach(
                        (entry) => {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target
                                    .classList
                                    .add(
                                        "is-visible"
                                    );


                                observer.unobserve(
                                    entry.target
                                );

                            }

                        }
                    );

                },

                {

                    threshold: 0.12,

                    rootMargin:
                        "0px 0px -40px 0px"

                }

            );



        /* ======================================
           OBSERVAR CADA ITEM
        ====================================== */

        itensTimeline.forEach(
            (item) => {

                observer.observe(item);

            }
        );

    }



    /* ==========================================
       GARANTIR QUE O HTML JÁ CARREGOU
    ========================================== */

    if (
        document.readyState === "loading"
    ) {

        document.addEventListener(

            "DOMContentLoaded",

            iniciarHistoriaFestival,

            {
                once: true
            }

        );

    } else {

        iniciarHistoriaFestival();

    }

})();