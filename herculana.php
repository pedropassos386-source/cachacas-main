<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Produto</title>
    <link rel="stylesheet" href="assets/css/cachaca-reset.css">
    <link rel="stylesheet" href="assets/css/cachaca.css">
    <link rel="stylesheet" href="assets/css/responsivo.css">

</head>

<body>
   <?php
    require './components/cachacas-header.php';
   ?>

    <main>
        <div class="container">
            <div class="mini-imagens">
                <div class="mini-imagem">
                    <img src="assets/img/cachaca-herculana.webp" alt="Imagem cachaça herculana">
                </div>

                <div class="cachacas-social">
                    <a class="instagram">
                        <img class="instagram-icon" src="assets/icons/instagram.svg" alt="Icone instagram">
                    </a>
                </div>
            </div>

            <div class="imagem-principal">
                <img src="assets/img/cachaca-herculana.webp" alt="imagem principal boralina" id="img">
            </div>

            <section class="description">
                <h2>Sobre</h2>

                <ul class="description-list">
                    <li>A Cachaça Herculana é um rótulo tradicional de Novo Cruzeiro (MG), reconhecido pela sua
                        robustez e processo de fabricação artesanal.</li>

                    <li><span>Fabricação:</span> É produzida em alambique de cobre na zona rural do município,
                        seguindo as técnicas típicas do Vale do Jequitinhonha.</li>

                    <li><span>Características:</span> A versão mais conhecida é a Herculana Ouro, envelhecida em
                        barris de carvalho, o que resulta em uma bebida de cor âmbar, com graduação alcoólica de 45%
                        e notas sensoriais amadeiradas.</li>

                    <li><span>Reconhecimento:</span> É presença garantida no Festival da Cachaça de Novo Cruzeiro,
                        onde é apreciada tanto pura quanto como base para drinks, sendo comercializada em empórios
                        especializados como a Cachaçaria Nacional.</li>
                </ul>
            </section>
        </div>
    </main>



    <script src="assets/js/zoom.js"></script> 
</body>
</html>