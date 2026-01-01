<?php

use App\Controllers\AuthController;

require __DIR__ . '/../vendor/autoload.php'; // composer

$rota = $_GET['rota'] ?? 'login';

$controller = new AuthController();

if ($rota === 'login') {
    $controller->login();
}

if ($rota === 'dashboard') {
    $controller->dashboard();
}