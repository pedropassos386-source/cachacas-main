<?php
$basePath = $basePath ?? '.';
$currentPage = $currentPage ?? '';
?>
<a class="skip-link" href="#conteudo-principal">Pular para o conteúdo</a>
<header class="header"<?= $currentPage === 'premiation' ? ' id="home"' : '' ?>>
    <a class="header-brand" href="<?= htmlspecialchars($basePath) ?>/index.php" aria-label="Cachaças de Novo Cruzeiro — página inicial">
        <img src="<?= htmlspecialchars($basePath) ?>/assets/img/logo.png" alt="Cachaças Novo Cruzeiro" width="500" height="500" decoding="async">
    </a>

    <nav aria-label="Navegação principal">
        <ul class="menu">
            <li>
                <a href="<?= htmlspecialchars($basePath) ?>/index.php"<?= $currentPage === 'home' ? ' aria-current="page"' : '' ?>>Home</a>
            </li>
            <li>
                <a href="<?= htmlspecialchars($basePath) ?>/pages/premiation/premiation.php"<?= $currentPage === 'premiation' ? ' aria-current="page"' : '' ?>>Premiações</a>
            </li>
            <li>
                <a href="<?= htmlspecialchars($basePath) ?>/pages/festival/historia.php"<?= $currentPage === 'historia' ? ' aria-current="page"' : '' ?>>História</a>
            </li>
        </ul>
    </nav>
</header>
