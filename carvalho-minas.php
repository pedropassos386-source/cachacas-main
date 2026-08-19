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
                    <img src="assets/img/cachaca-carvalho-de-minas.jpg" alt="Imagem cachaça Carvalho de Minas" id="front">
                </div>

                <div class="mini-imagem">
                    <img src="assets/img/carvalho-minas2.jpg" alt="Imagem cachaça Carvalho de Minas" id="side">
                </div>

                <div class="cachacas-social">
                    <a class="instagram" href="https://www.instagram.com/cachaca_carvalho_mg/" target="_blank">
                        <img class="instagram-icon" src="assets/icons/instagram.svg" alt="Icone instagram">
                    </a>
                </div>
            </div>

            <div class="imagem-principal">
                <img src="assets/img/cachaca-carvalho-de-minas.jpg" alt="imagem principal Carvalho de Minas" id="img">
            </div>

            <section class="description">
                <h2>Sobre</h2>

                <ul class="description-list">
                    <li>A Cachaça Carvalho de Minas é uma das marcas mais tradicionais e respeitadas de Novo Cruzeiro (MG), representando o estilo clássico das cachaças envelhecidas do Vale do Jequitinhonha</li>

                    <li><span>Local de Fabricação:</span> Produzida artesanalmente no alambique do produtor Zelito Mendes, localizado na zona rural de Novo Cruzeiro. </li>

                    <li><span>Desde quando:</span> A marca possui décadas de história, consolidando-se como uma das pioneiras na comercialização de cachaças envelhecidas em madeira nobre na região.</li>

                    <li><span>Processo:</span> Destilada em alambiques de cobre, seu diferencial é o repouso prolongado em barris de carvalho, o que resulta em uma bebida de baixa acidez, coloração âmbar e notas sensoriais de baunilha e amêndoas</li>
                </ul>
            </section>
        </div>
    </main>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/zoom.js"></script>
</body>

</html>