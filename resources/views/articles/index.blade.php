<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal | Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
</head>

<body>

<nav class="navbar">
    <a href="/" class="logo">JOURNAL</a>
    <div class="links">
        <a href="/">Accueil</a>
        <a href="{{ route('auth.login') }}" class="login-link">Connexion</a>
    </div>
</nav>

<div class="container">
    <header class="page-header">
        <h1 class="title">Découvrir nos articles</h1>
        <p class="subtitle">Toute l'actualité et les réflexions de notre communauté.</p>
    </header>
    {{-- filtrer par categories  --}}
   <form method="GET" action="{{ route('articles.index') }}" class="filter-bar">
    <select name="categorie_id">
        <option value="">Toutes les catégories</option>
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}"{{ request('categorie_id') == $cat->id ? 'selected' : '' }}>
                {{ $cat->nom }}
            </option>
        @endforeach
    </select>
    <button type="submit">Filtrer</button>
</form>

    @if($articles->count() > 0)
        <div class="article-grid">
            @foreach($articles as $article)
         <article class="card">
    <div class="card-image">
        <img src="{{ asset($article->image) }}">
         <div class="category-badge">
        {{ $article->categorie->nom }}
    </div>
    </div>

    <div class="card-body">
        <div class="meta">
            {{ $article->publie_at }}
        </div>

        <h2 class="article-title">{{ $article->titre }}</h2>

        <p class="excerpt">
            {{ Str::limit($article->contenu, 200) }}
        </p>

        <a href="{{ route('articles.show', $article->id) }}" class="read-more">
            Read More →
        </a>
    </div>
</article>
            @endforeach
        </div>
    @else
        <div class="empty-state">
            <p>Aucun article disponible pour le moment.</p>
        </div>
    @endif
</div>

</body>
</html>