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
    require "./components/cachacas-header.php";
    ?>

    <main>
        <div class="container">
            <div class="mini-imagens">
                <div class="mini-imagem">
                    <img src="assets/img/cachaca-boralina.webp" alt="Imagem cachaça boralina" id="front">
                </div>

                <div class="mini-imagem">
                    <img src="assets/img/cachaca-boralina-prata-700ml-00265_1.webp" alt="Imagem cachaça boralina prata" id="side">
                </div>

                <div class="cachacas-social">
                    <a class="instagram" href="https://www.instagram.com/cachacaboralina" target="_blank">
                        <img class="instagram-icon" src="assets/icons/instagram.svg" alt="Icone instagram">
                    </a>
                </div>
            </div>

            <div class="imagem-principal">
                <img src="assets/img/cachaca-boralina.webp" alt="imagem principal boralina" id="img">
            </div>

            <section class="description">
                <h2>Sobre</h2>

                <ul class="description-list">
                    <li>A Cachaça Boralina é uma marca artesanal de Novo Cruzeiro, Minas Gerais, com produção na Fazenda
                        Borá desde 1850, envelhecida em madeiras como Bálsamo e Castanheira, resultando em versões prata
                        (sem madeira ou castanheira) e ouro (bálsamo/castanheira), sendo premiada internacionalmente e
                        conhecida pela tradição mineira.</li>

                    <li><span>Local de Fabricação:</span> Novo Cruzeiro, MG, Fazenda Borá.</li>

                    <li><span>Produção:</span> Artesanal, do canavial ao copo, com tradição desde 1850.</li>

                    <li>Disponível em versões como Prata, Bálsamo e Envelhecida 3 anos.</li>

                    <li>A versão envelhecida se destaca pelo descanso em tonéis de bálsamo, que adiciona aroma e sabor amadeirado.</li>

                    <li>Possui sabor suave, equilibrado e com notas aromáticas típicas de cachaça premium.</li>

                    <li>Já recebeu premiações em concursos de avaliação de cachaças de Minas Gerais.</li>

                    <li>Muito apreciada tanto para consumo puro quanto para coquetéis de alta qualidade.</li>

                    <li><span>Onde Encontrar:</span></li>

                    <li>Pode ser encontrada em lojas especializadas em cachaças (Cachaçaria Nacional), sites de e-commerce e, às vezes, em festivais de cachaça.</li>
                </ul>
            </section>
        </div>
    </main>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/zoom.js"></script>
</body>

</html>