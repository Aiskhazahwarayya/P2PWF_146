<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Tambahkan fungsi index di bawah ini
    public function index()
    {
        // Fungsi ini akan mencari file resources/views/about.blade.php
        return view('about');
    }
}
