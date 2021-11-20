<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitHubWebHookController extends Controller
{
    public function deploy()
    {
        exec('git pull');
        exec('composer install');
        exec('php artisan migrate');
    }
}
