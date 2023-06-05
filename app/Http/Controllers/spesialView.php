<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        return view('special_view');

        // Mengalihkan ke halaman beranda setelah 2 detik
        return Redirect::to('/home')->with('success', 'Anda dialihkan ke halaman beranda.')->delay(2);
    }
}
