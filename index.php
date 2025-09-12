<?php
$config = include __DIR__ . '/config/config.php';

$page = $_GET['p'] ?? 'home';

$page = preg_replace('/[^a-zA-Z0-9_-]/', '', $page);

include __DIR__ . '/templates/header.php';

$pageFile = __DIR__ . '/pages/' . $page . '.php';

if (file_exists($pageFile)) {
    include $pageFile;
} else {
    include __DIR__ . '/pages/404.php';
}

// Set footer
include __DIR__ . '/templates/footer.php';
