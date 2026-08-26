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
    <?php require './components/cachacas-header.php'; ?>

    <main>
        <div class="container">
            <div class="mini-imagens">
                <div class="mini-imagem">
                    <img src="assets/img/cachaca-coragem.jpg" alt="Imagem cachaça Coragem" id="front">
                </div>

                <div class="mini-imagem">
                    <img src="assets/img/artistas/Coragem.png" alt="Imagem cachaça Ribeirinha" id="side">
                </div>

                <div class="cachacas-social">
                    <a class="instagram">
                        <img class="instagram-icon" src="assets/icons/instagram.svg" alt="Icone instagram">
                    </a>
                </div>
            </div>

            <div class="imagem-principal">
                <img src="assets/img/cachaca-coragem.jpg" alt="imagem principal Coragem" id="img">
            </div>

            <section class="description">
                <h2>Sobre</h2>

                <ul class="description-list">
                    <li>A Cachaça Coragem é uma das marcas mais tradicionais e antigas de Novo Cruzeiro, carregando em sua história parte da cultura e da tradição da produção artesanal de cachaça no município. Seu fabricante também é responsável por outros dois rótulos: a Fera Corajosa, em sua versão prata, e a Leite de Onça, ampliando uma produção que valoriza os sabores e a identidade da nossa terra.</li>

                    <li><span>Local de Fabricação:</span> FABRICADA,ENGARRAFADA E ROTULADA POR:
                        JULIMAR ALVES FIGUEIRÓ
                        FAZENDA CONCEIÇÃO
                        NOVILHONA
                        MUNICIPIO DE NOVO CRUZEIRO MG
                        VALE DO JEQUITINHONHA</li>

                    <li><span>Desde quando:</span>1957</li>
                </ul>
            </section>
        </div>
    </main>


    <script src="assets/js/app.js"></script>
    <script src="assets/js/zoom.js"></script>
</body>

</html>