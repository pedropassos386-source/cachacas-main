<?php

declare(strict_types=1);

$root = dirname(__DIR__);
$errors = [];

function addError(array &$errors, string $message): void
{
    $errors[] = $message;
}

function assertFileExists(string $root, string $relativePath, array &$errors, string $context): void
{
    $fullPath = $root . DIRECTORY_SEPARATOR . str_replace('/', DIRECTORY_SEPARATOR, $relativePath);

    if (!is_file($fullPath)) {
        addError($errors, sprintf('%s aponta para arquivo inexistente: %s', $context, $relativePath));
    }
}

$catalogPath = $root . '/data/cachacas.php';

if (!is_file($catalogPath)) {
    addError($errors, 'Catálogo data/cachacas.php não foi encontrado.');
    $catalog = [];
} else {
    $catalog = require $catalogPath;
}

if (!is_array($catalog) || $catalog === []) {
    addError($errors, 'O catálogo de cachaças está vazio ou inválido.');
}

$names = [];
$pages = [];

foreach ($catalog as $index => $item) {
    $position = $index + 1;

    if (!is_array($item)) {
        addError($errors, "Entrada {$position} do catálogo não é um array.");
        continue;
    }

    foreach (['nome', 'imagem', 'alt', 'local', 'produtor', 'pagina'] as $field) {
        if (!isset($item[$field]) || !is_string($item[$field]) || trim($item[$field]) === '') {
            addError($errors, "Entrada {$position} possui campo obrigatório inválido: {$field}");
        }
    }

    $name = (string) ($item['nome'] ?? '');
    $page = (string) ($item['pagina'] ?? '');
    $image = (string) ($item['imagem'] ?? '');

    if ($name !== '' && isset($names[$name])) {
        addError($errors, "Nome duplicado no catálogo: {$name}");
    }
    $names[$name] = true;

    if ($page !== '' && isset($pages[$page])) {
        addError($errors, "Página duplicada no catálogo: {$page}");
    }
    $pages[$page] = true;

    if ($page !== '') {
        if (!preg_match('/^[a-z0-9][a-z0-9-]*\.php$/', $page)) {
            addError($errors, "Página fora do padrão minúsculo/ASCII: {$page}");
        }
        assertFileExists($root, $page, $errors, "Catálogo ({$name})");
    }

    if ($image !== '') {
        if (!preg_match('#^[a-z0-9_./-]+\.(?:jpg|jpeg|png|webp|svg)$#', $image)) {
            addError($errors, "Imagem fora do padrão minúsculo/ASCII: {$image}");
        }
        assertFileExists($root, $image, $errors, "Catálogo ({$name})");
    }
}

$keyFiles = [
    'index.php',
    'components/site-header.php',
    'components/site-footer.php',
    'components/cachacas-carousel.php',
    'pages/festival/historia.php',
    'pages/premiation/premiation.php',
    'assets/js/script.js',
    'assets/js/eventos.js',
    'assets/js/historia-festival.js',
    'assets/css/style.css',
    'assets/css/historia-festival.css',
    'assets/img/artistas/banner.png',
    'assets/img/artistas/icaro-gilmar.jpg',
    'assets/img/artistas/rai-saia-rodada.jpg',
    'assets/img/artistas/the-fevers.jpg',
    'assets/icons/instagram.svg',
    'assets/icons/whatsapp.svg',
];

foreach ($keyFiles as $keyFile) {
    assertFileExists($root, $keyFile, $errors, 'Estrutura principal');
}

$legacyRedirects = [
    'Aminésia.php' => 'aminesia.php',
    'Coragem.php' => 'coragem.php',
    'Gravata.php' => 'gravata.php',
    'Mineirinha.php' => 'mineirinha.php',
];

foreach ($legacyRedirects as $legacy => $target) {
    assertFileExists($root, $legacy, $errors, 'Compatibilidade');
    assertFileExists($root, $target, $errors, 'Compatibilidade');

    $legacyContent = @file_get_contents($root . '/' . $legacy);
    if ($legacyContent === false || !str_contains($legacyContent, $target) || !str_contains($legacyContent, '301')) {
        addError($errors, "Redirect legado não aponta corretamente para {$target}: {$legacy}");
    }
}

$forbiddenReferences = [
    'assets/img/artistas/artista-quinta.jpg',
    'assets/img/artistas/artista-sexta.jpg',
    'assets/img/artistas/artista-domingo.jpg',
    'assets/img/cachaça-nova-fonte.jpg',
    'assets/img/cachaça-boralina.jpg',
    'assets/img/Photos-1-001/',
];

$filesToInspect = [
    'index.php',
    'data/cachacas.php',
    'assets/js/eventos.js',
    'pages/premiation/premiation.php',
    'aminesia.php',
    'coragem.php',
    'mineirinha.php',
    'nova-fonte.php',
    'pinheirinha.php',
    'ramiro.php',
];

foreach ($filesToInspect as $file) {
    $content = @file_get_contents($root . '/' . $file);
    if ($content === false) {
        addError($errors, "Não foi possível ler {$file}");
        continue;
    }

    foreach ($forbiddenReferences as $reference) {
        if (str_contains($content, $reference)) {
            addError($errors, "Referência legada encontrada em {$file}: {$reference}");
        }
    }
}

foreach (['index.php', 'assets/js/eventos.js'] as $festivalFile) {
    $content = @file_get_contents($root . '/' . $festivalFile);
    if ($content !== false && str_contains($content, '00:00')) {
        addError($errors, "Horário placeholder 00:00 ainda existe na programação atual: {$festivalFile}");
    }
}

if ($errors !== []) {
    fwrite(STDERR, "Falha na validação do site:\n\n");
    foreach ($errors as $error) {
        fwrite(STDERR, "- {$error}\n");
    }
    exit(1);
}

printf("OK: %d cachaças validadas; páginas, imagens e referências principais estão consistentes.\n", count($catalog));
