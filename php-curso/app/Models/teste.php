<?php

require __DIR__ . '/Usuario.php';

use App\Models\Usuario;

$usuario = new Usuario();
$usuarios = $usuario->listar();

print_r($usuarios);