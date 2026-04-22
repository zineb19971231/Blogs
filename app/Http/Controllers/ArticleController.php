<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request){
        $query = Article::with(['categorie','user']);
        if($request -> categorie_id){
            $query->where('categorie_id', $request->categorie_id);
        }
    
        $articles = $query->latest()->get();
        $categories = Categorie::all();

        return view('articles.index', compact('articles', 'categories'));
    }

    public function show($id){
        $article = Article::with(['categorie','user'])
        ->findOrFail($id);
        return view('articles.show', compact('article'));
    }
}
