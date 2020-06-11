<?php

switch (htmlspecialchars($_GET['site'])) {
    case '':
        require __DIR__ . '/sites/main.php';
        break;
    case 'projects':
        require __DIR__ . '/sites/projects.php';
        break;
    case 'about':
        require __DIR__ . '/sites/about.php';
        break;
    case 'services':
        require __DIR__ . '/sites/services.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/sites/main.php';
        break;
}