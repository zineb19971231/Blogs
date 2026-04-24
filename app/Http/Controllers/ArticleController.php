<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

        public function dashboard(){
            $articles = Article::where('user_id', Auth::id())->get();
            return view('bloger.dashboard', compact('articles'));
        }

    public function show($id){
        $article = Article::with(['categorie','user'])
        ->findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create(){
        $categories = Categorie::all();
        return view('articles.create', compact('categories'));
    }
    public function store(Request $request){
        $validation = $request->validate([
            'titre' => 'required|string',
            'contenu' => 'required|string',
            'statut' => 'required|in:publie,brouillon',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        Article::create($validation + ['user_id' => Auth::id()]);

        return redirect()->route('dashboard')->with('success', 'Article created successfully.');
    }
}
