<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Subfission\Cas\CasManager;

class LogoutController extends Controller
{

    private CasManager $cas;

    public function __construct()
    {
        $this->cas = app('cas');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $this->cas->logout(route('home'));
    }
}