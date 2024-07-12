<?php
// app/Http/Controllers/DashboardController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function yourCollectibles()
    {
        return view('yourCollectibles');
    }
    public function account()
    {
        return view('account');
    }

    public function transferSettings()
    {
        return view('transfer-settings');
    }

    public function help()
    {
        return view('help');
    }
}

