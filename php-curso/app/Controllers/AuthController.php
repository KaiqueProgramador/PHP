<?php

namespace App\Controllers;

class AuthController
{
    public function login()
    {
        require __DIR__ . '/../../views/login.php';
    }

    public function dashboard()
    {
        require __DIR__ . '/../../views/dashboard.php';
    }
}