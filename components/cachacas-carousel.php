<?php
$basePath = $basePath ?? '.';
$cachacas = require __DIR__ . '/../data/cachacas.php';
?>
<section class="cachacas-section">
    <?php foreach ($cachacas as $index => $cachaca): ?>
        <article class="cards" style="--i: <?= $index + 1 ?>">
            <img
                src="<?= htmlspecialchars($basePath . '/' . $cachaca['imagem']) ?>"
                alt="<?= htmlspecialchars($cachaca['alt']) ?>"
                loading="lazy"
                decoding="async"
            >

            <span class="cachaca-nome">
                <?= htmlspecialchars($cachaca['nome']) ?>
            </span>

            <div class="cachaca-tags">
                <span class="tag tag-local">
                    <?= htmlspecialchars($cachaca['local']) ?>
                </span>

                <span class="tag tag-produtor">
                    <?= htmlspecialchars($cachaca['produtor']) ?>
                </span>
            </div>

            <a class="ver-mais" href="<?= htmlspecialchars($basePath . '/' . $cachaca['pagina']) ?>">
                Ver Mais
            </a>
        </article>
    <?php endforeach; ?>
</section>
