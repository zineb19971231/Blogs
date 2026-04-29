 
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
<a href="{{ route('articles.create') }}" class="btn-add">
    + Ajouter un article
</a>
<h3>Mes Articles</h3>
<div class="article-list">
@if($articles->count())
    @foreach($articles as $article)
        <div class="article-card">
            <h2>{{ $article->titre }}</h2>
            <h3>{{ $article->contenu }}</h3>
            <h4>Catégorie: {{ $article->categorie->nom }}</h4>
            <h4>Auteur: {{ $article->user->nom }}</h4>
            <h4>{{ $article->publie_at }}</h4>

            <div class="actions">
                {{-- <a href="{{ route('articles.show', $article->id) }}">Voir</a> --}}
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Tu es sûr de vouloir supprimer cet article ?')">

                        Supprimer</button>
                </form>
            </div>
        </div>
    @endforeach
@endif
</div>
@endsection 
