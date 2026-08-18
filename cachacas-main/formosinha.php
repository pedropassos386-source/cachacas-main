<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Produto</title>
    <link rel="stylesheet" href="assets/css/cachaca-reset.css">
    <link rel="stylesheet" href="assets/css/cachaca.css">
</head>

<body>
   <?php
    require './components/cachacas-header.php';
   ?>

    <main>
        <div class="container">
            <div class="mini-imagens">
                <div class="mini-imagem">
                    <img src="assets/img/cachaca-formosinha.jpg" alt="Imagem cachaça Formosinha" id="front">
                </div>

                <div class="mini-imagem">
                    <img src="assets/img/formosinha-foto2.jpg" alt="Imagem cachaça Formosinha" id="side">
                </div>

                <div class="cachacas-social">
                    <a class="instagram" href="https://www.instagram.com/cachaca_formosinha" target="_blank">
                        <img class="instagram-icon" src="assets/icons/instagram.svg" alt="Icone instagram">
                    </a>
                </div>
            </div>

            <div class="imagem-principal">
                <img src="assets/img/cachaca-formosinha.jpg" alt="imagem principal formosinha" id="img">
            </div>

            <section class="description">
                <h2>Sobre</h2>

                <ul class="description-list">
                    <li>A Cachaça Formosinha é uma das marcas artesanais que compõem o tradicional polo produtor de Novo
                        Cruzeiro (MG), no Vale do Jequitinhonha.</li>

                    <li><span>Fabricação:</span> É fabricada no Alambique da Cachaça Formosinha, situado na localidade
                        de Ribeirão da Pedra, zona rural de Novo Cruzeiro.</li>

                    <li><span>Produtor:</span> O alambique é comandado pelo produtor conhecido como Nei, que mantém viva
                        a arte da destilação artesanal com foco na identidade e cultura regional.</li>

                    <li><span>Processo:</span> Utiliza métodos tradicionais de alambique de cobre, resultando em uma
                        bebida que busca preservar o "sabor da terra".</li>
                </ul>
            </section>
        </div>
    </main>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/zoom.js"></script>
</body>

</html>