<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Cachaças de Novo Cruzeiro | História, Cultura e Festival</title>
  <meta name="description"
    content="Conheça as cachaças de Novo Cruzeiro, seus produtores, histórias, premiações e a tradição do Festival da Cachaça em Minas Gerais.">
  <meta name="robots" content="index, follow">
  <meta name="theme-color" content="#3a0b0c">
  <meta property="og:title" content="Cachaças de Novo Cruzeiro | História, Cultura e Festival">
  <meta property="og:description"
    content="Conheça as cachaças, os produtores e o Festival da Cachaça de Novo Cruzeiro, Minas Gerais.">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:image" content="assets/img/artistas/banner.png">
  <link rel="icon" href="./assets/img/logo.png" type="image/png">

  <link rel="stylesheet" href="assets/css/reset.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsivo.css">
</head>

<body>

  <?php
  $basePath = '.';
  $currentPage = 'home';
  require __DIR__ . '/components/site-header.php';
  ?>

  <!-- =========================
         CONTEÚDO PRINCIPAL
    ========================== -->

  <main class="desktop" id="conteudo-principal">

    <!-- =========================
             BANNER
        ========================== -->

    <section class="banner">

      <img src="./assets/img/artistas/banner.png" alt="Estação antiga de Novo Cruzeiro" width="2172" height="724"
        fetchpriority="high">

      <h1 id="frase-dinamica">
        Seja Bem Vindo ao Portal das Cachaças
      </h1>

    </section>

    <!-- =========================
             SEÇÃO DAS CACHAÇAS
        ========================== -->

    <section class="cachacas-area">

      <div class="titulo-cachacas">
        <h2>Conheça as Cachaças de Novo Cruzeiro</h2>
        <p>Conheça um pouco das cachaças produzidas em nossa terra.</p>
      </div>

      <div class="container">

        <button class="go-back" type="button" aria-label="Ver cachaças anteriores">
          <img src="./assets/icons/arrow-left.svg" alt="" width="24" height="24">
        </button>

        <?php require __DIR__ . '/components/cachacas-carousel.php'; ?>

        <button class="go-forward" type="button" aria-label="Ver próximas cachaças">
          <img src="./assets/icons/arrow-right.svg" alt="" width="24" height="24">
        </button>

      </div>

    </section>

    <!-- =========================
     31º FESTIVAL DA CACHAÇA
========================== -->

    <section class="festival-section" id="festival">

      <div class="festival-header">

        <span class="festival-subtitulo">
          Eventos & Cultura
        </span>

        <h2>
          31º Festival da Cachaça
        </h2>

        <p>
          Música, cultura e tradição se encontram em uma das
          maiores celebrações de Novo Cruzeiro. Horários e a distribuição
          das atrações por dia serão atualizados conforme confirmação oficial.
        </p>

      </div>

      <!-- DIAS DO FESTIVAL -->

      <div class="festival-days" role="tablist" aria-label="Dias do Festival da Cachaça">

        <button class="festival-day active" type="button" data-festival-index="0" role="tab" aria-selected="true">
          <span>Sexta</span>
          <small>1º dia</small>
        </button>

        <button class="festival-day" type="button" data-festival-index="1" role="tab" aria-selected="false"
          tabindex="-1">
          <span>Sábado</span>
          <small>2º dia</small>
        </button>

        <button class="festival-day" type="button" data-festival-index="2" role="tab" aria-selected="false"
          tabindex="-1">
          <span>Domingo</span>
          <small>3º dia</small>
        </button>

      </div>

      <!-- PROGRAMAÇÃO -->

      <div class="festival-showcase" id="festival-showcase" aria-label="Programação selecionada do festival">

        <div class="festival-main">

          <img id="festival-main-image" src="./assets/img/artistas/icaro-gilmar.jpg"
            alt="Atração principal de sexta-feira" width="320" height="320" loading="lazy" decoding="async">

          <div class="festival-main-overlay"></div>

          <div class="festival-main-content">

            <span class="festival-badge">
              ★ Atração principal
            </span>

            <p class="festival-current-day" id="festival-current-day">
              Sexta-feira
            </p>

            <h3 id="festival-main-name">
              Ícaro e Gilmar
            </h3>

            <div class="festival-time">

              <span>Show</span>

              <strong id="festival-main-time">
                Horário a confirmar
              </strong>

            </div>

          </div>

        </div>

        <div class="festival-other-shows">

          <div class="festival-other-header">
            <span>Programação</span>
            <h3>Outros shows da noite</h3>
          </div>

          <div class="festival-lineup" id="festival-lineup">
            <!-- JavaScript coloca os artistas aqui -->
          </div>

        </div>

      </div>

      <div class="festival-indicators">

        <button class="festival-indicator active" type="button" data-festival-index="0"
          aria-label="Ver sexta-feira"></button>

        <button class="festival-indicator" type="button" data-festival-index="1" aria-label="Ver sábado"></button>

        <button class="festival-indicator" type="button" data-festival-index="2" aria-label="Ver domingo"></button>

      </div>

    </section>

    <!-- ==========================================
     HISTÓRIA DA CACHAÇA E DO FESTIVAL
=========================================== -->

    <section class="historia-section" id="historia">

      <div class="historia-header">

        <span class="historia-subtitulo">
          Nossa história
        </span>

        <h2>
          Da tradição dos alambiques ao Festival da Cachaça
        </h2>

        <p>
          Uma história construída entre fazendas, produtores,
          alambiques e uma celebração que se tornou parte da
          identidade de Novo Cruzeiro.
        </p>

      </div>

      <div class="timeline">

        <article class="timeline-item">

          <div class="timeline-marker">
            <span>1850</span>
          </div>

          <div class="timeline-content">

            <span class="timeline-label">
              Tradição
            </span>

            <h3>
              A cachaça já fazia parte da nossa história
            </h3>

            <p>
              Na Fazenda Borá funciona um dos alambiques
              mais antigos de Novo Cruzeiro. A produção da
              Cachaça Boralina remonta a 1850, mostrando que
              a tradição da bebida no município começou muito
              antes da criação do Festival da Cachaça.
            </p>

          </div>

        </article>

        <article class="timeline-item">

          <div class="timeline-marker">
            <span>1994</span>
          </div>

          <div class="timeline-content">

            <span class="timeline-label">
              O começo do festival
            </span>

            <h3>
              Nasce o Festival da Cachaça
            </h3>

            <p>
              Idealizado pela Associação Comercial e
              Agropecuária de Novo Cruzeiro — ACIANC —,
              o Festival nasceu para valorizar as cachaças
              produzidas nos alambiques locais e incentivar
              a micro e pequena indústria do município.
            </p>

            <p>
              Sua primeira edição aconteceu na Avenida
              Júlio Campos, no centro da cidade, ainda com
              um público relativamente pequeno.
            </p>

          </div>

        </article>

        <article class="timeline-item">

          <div class="timeline-marker timeline-marker-text">
            <span>2000+</span>
          </div>

          <div class="timeline-content">

            <span class="timeline-label">
              Crescimento
            </span>

            <h3>
              O Festival ganha Novo Cruzeiro
            </h3>

            <p>
              Com o crescimento da festa e a chegada de
              visitantes de outras cidades, o espaço original
              já não acompanhava mais as proporções alcançadas
              pelo evento.
            </p>

            <p>
              Na primeira década dos anos 2000, o município
              construiu o Parque de Eventos José Barrack
              Sobrinho, que passou a receber o Festival da
              Cachaça.
            </p>

          </div>

        </article>

        <article class="timeline-item timeline-item-destaque">

          <div class="timeline-marker">
            <span>2026</span>
          </div>

          <div class="timeline-content">

            <span class="timeline-label">
              Presente
            </span>

            <h3>
              31º Festival da Cachaça
            </h3>

            <p>
              Em 2026, Novo Cruzeiro chega à 31ª edição do
              Festival da Cachaça e da Microindústria,
              mantendo viva uma tradição que une produção
              local, cultura, gastronomia, comércio e música.
            </p>

            <div class="timeline-evento">

              <span>
                04 a 07
              </span>

              <div>
                <strong>
                  Setembro de 2026
                </strong>

                <small>
                  Novo Cruzeiro — MG
                </small>
              </div>

            </div>

          </div>

          <a href="./pages/festival/historia.php" class="historia-saiba-mais">
            Conheça a história completa
            <span aria-hidden="true">→</span>
          </a>

        </article>

      </div>

    </section>

  </main>

  <?php require __DIR__ . '/components/site-footer.php'; ?>

  <script src="./assets/js/script.js" defer></script>
  <script src="./assets/js/eventos.js" defer></script>

</body>

</html>