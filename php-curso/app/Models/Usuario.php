<?php

namespace App\Models;

class Usuario
{
    public function listar()
    {
        $pdo = require __DIR__ . '/../../config/database.php';
        return $pdo->query("SELECT * FROM usuarios")->fetchAll();
    }
}
