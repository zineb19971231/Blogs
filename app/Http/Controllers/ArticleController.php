<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::with(['categorie','user'])
        ->latest()
        ->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::with(['categorie','user'])
        ->findOrFail($id);
        return view('articles.show', compact('article'));
    }
}
