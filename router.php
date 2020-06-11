<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/aronnagy/?site=main':
        require __DIR__ . '/sites/main.php';
        break;
    case '/aronnagy/?site=projects':
        require __DIR__ . '/sites/projects.php';
        break;
    case '/aronnagy/?site=about':
        require __DIR__ . '/sites/about.php';
        break;
    case '/aronnagy/?site=services':
        require __DIR__ . '/sites/services.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/sites/main.php';
        break;
}