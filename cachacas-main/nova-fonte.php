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
                    <img src="assets/img/cachaça-nova-fonte.jpg" alt="Imagem cachaça nova fonte" id="front">
                </div>

                <div class="mini-imagem">
                    <img src="assets/img/foto-nova-fonte2.jpg" alt="Imagem cachaça nova fonte" id="side">
                </div>

                <div class="cachacas-social">
                    <a class="instagram" href="https://www.instagram.com/cachaca_nova_fonte/" target="_blank">
                        <img class="instagram-icon" src="assets/icons/instagram.svg" alt="Icone instagram">
                    </a>
                </div>
            </div>

            <div class="imagem-principal">
                <img src="assets/img/cachaça-nova-fonte.jpg" alt="imagem principal nova fonte" id="img">
            </div>

            <section class="description">
                <h2>Sobre</h2>

                <ul class="description-list">
                    <li>A Cachaça Nova Fonte é uma bebida artesanal de tradição familiar, reconhecida pela preservação de métodos históricos de destilação.</li>
                    <li><span>Origem:</span> É produzida na Fazenda Queixada, situada no distrito de Queixada, em Novo Cruzeiro (MG). </li>
                    <li><span>História:</span>  A produção remonta a várias gerações da família Nogueira Viana, com registros históricos da propriedade datados de 1864. O atual responsável pela marca é Raimundo Assis Nogueira Viana.</li>
                </ul>
            </section>
        </div>
    </main>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/zoom.js"></script>
</body>

</html>