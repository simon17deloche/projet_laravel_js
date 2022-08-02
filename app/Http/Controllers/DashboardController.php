<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(50);

return view('dashboard', compact('articles'));
    }
}
