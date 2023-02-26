<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "<h1>Selamat Datang</h1>";
    }

    public function about()
    {
        return "<h1>Muhamad Syaroful Anam</h1> <br> <h2>2141720108</h2>";
    }

    public function article($id)
    {
        return "<h2>Halaman Artikel dengan ID $id</h2>";
    }
}
