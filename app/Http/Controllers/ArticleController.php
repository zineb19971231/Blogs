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

    public function create(){
        $categories = Categorie::all();
        return view('articles.create',compact('categories'));
    }

    // public function index(){
    //     $articles = Article::with('status','publie');
    //     $categories = Categorie::all();
    //     return view ('articles.index', compact('articles','categories'));
    // }

    public function store(Request $request){
        $validation=$request->validate([
            'titre' => 'required',
            'contenu' => 'required',
            'statut' => 'required',
            'categorie_id' => 'required|exists:categories,id',
        ]);
        $validation['user_id'] = 5;
        $validation['publie_at'] = now();
        Article::create($validation);
        return redirect()->route('articles.index')->with('success', 'Article créé avec succès.');
    }
   
}
