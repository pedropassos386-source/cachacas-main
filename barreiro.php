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
                    <img src="assets/img/cachaca-barreiro.jpg" alt="Imagem cachaça Barreiro" id="front">
                </div>

                <div class="mini-imagem">
                    <img src="assets/img/cachaca-barreiro2.jpg" alt="Imagem cachaça Barreiro" id="side">
                </div>

                <div class="cachacas-social">
                    <a class="instagram">
                        <img class="instagram-icon" src="assets/icons/instagram.svg" alt="Icone instagram">
                    </a>
                </div>
            </div>

            <div class="imagem-principal">
                <img src="assets/img/cachaca-barreiro.jpg" alt="imagem principal Ribeirinha" id="img">
            </div>

            <section class="description">
                <h2>Sobre</h2>

                <ul class="description-list">
                    <li>A Barreiro é uma cachaça produzida em Novo Cruzeiro, cidade no Vale do Jequitinhonha, norte do estado de Minas Gerais, próximo a Salinas. Com seu mosto obtido através do plantio de cana-de-açúcar em uma região de pouca chuva, mas de solo rico e muito fértil, a cachaça Barreiro obtém qualidades e natureza única, com maior doçura e sabor. O processo de destilação em alambiques de cobre, o repouso e a estocagem em tanques de puro bálsamo, conferem à Barreiro ainda mais aroma e sofisticação, resultando em uma cachaça de excelência, saborosa e singular.</li>

                    <li><span>Local de Fabricação:</span>Produzida e Engarrafada por
                        João Barreiro
                        Fazenda Santa Maria
                        Novo Cruzeiro-MG</li>

                    <li><span>Desde quando:</span>1996</li>
                </ul>
            </section>
        </div>
    </main>


    <script src="assets/js/app.js"></script>
    <script src="assets/js/zoom.js"></script>
</body>

</html>