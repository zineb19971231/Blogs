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
        <a href="/login" class="login-link">Connexion</a>
    </div>
</nav>

<div class="container">
    <header class="page-header">
        <h1 class="title">Découvrir nos articles</h1>
        <p class="subtitle">Toute l'actualité et les réflexions de notre communauté.</p>
    </header>

    @if($articles->count() > 0)
        <div class="article-grid">
            @foreach($articles as $article)
         <article class="card">
    <div class="card-image">
        <img src="{{ asset($article->image) }}">
    </div>

    <div class="card-body">
        <div class="meta">
            {{ $article->created_at->format('d M Y') }}
        </div>

        <h2 class="article-title">{{ $article->titre }}</h2>

        <p class="excerpt">
            {{ Str::limit($article->contenu, 100) }}
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