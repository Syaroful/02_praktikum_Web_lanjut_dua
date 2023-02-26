<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article($id)
    {
        return "<h2>Halaman Artikel dengan ID $id</h2>";
    }
}
