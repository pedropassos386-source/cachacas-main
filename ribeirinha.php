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
    <?php require './components/cachacas-header.php';?>

    <main>
        <div class="container">
            <div class="mini-imagens">
                <div class="mini-imagem">
                    <img src="assets/img/cachaca-ribeirinha.jpg" alt="Imagem cachaça Ribeirinha" id="front">
                </div>

                <div class="mini-imagem">
                    <img src="assets/img/foto2-ribeirinha.jpg" alt="Imagem cachaça Ribeirinha" id="side">
                </div>

                <div class="cachacas-social">
                    <a class="instagram">
                        <img class="instagram-icon" src="assets/icons/instagram.svg" alt="Icone instagram">
                    </a>
                </div>
            </div>

            <div class="imagem-principal">
                <img src="assets/img/cachaca-ribeirinha.jpg" alt="imagem principal Ribeirinha" id="img">
            </div>

            <section class="description">
                <h2>Sobre</h2>

                <ul class="description-list">
                    <li>A Cachaça Ribeirinha é uma marca tradicionalmente comercializada e muito popular na região de Novo Cruzeiro (MG), embora sua origem esteja ligada a municípios vizinhos do Vale do Jequitinhonha.</li>

                    <li><span>Local de Fabricação:</span> Produzida na região de Macaúbas, no município de Ponto dos Volantes (MG), vizinho a Novo Cruzeiro. É fabricada no Alambique Ribeirinha, sob responsabilidade do produtor João Bento.</li>

                    <li><span>Desde quando:</span> A marca possui décadas de tradição, sendo uma das pioneiras na distribuição em larga escala para os empórios e festas de toda a região nordeste de Minas Gerais.</li>
                </ul>
            </section>
        </div>
    </main>


    <script src="assets/js/app.js"></script>
    <script src="assets/js/zoom.js"></script>
</body>

</html>