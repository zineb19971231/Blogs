<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->titre }} | Journal</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    
    <!-- CSS global -->
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
    <!-- CSS spécifique -->
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>

<body>

<nav class="navbar">
    <a href="/" class="logo">JOURNAL</a>
    <div class="links">
        <a href="/">Accueil</a>
        <a href="/login" class="login-link">Connexion</a>
    </div>
</nav>

<div class="container article-show">

    <a href="/" class="back-link">← Retour</a>

    <article class="article-detail">

        @if($article->image)
            <div class="article-image">
                <img src="{{ asset($article->image) }}" alt="image article">
            </div>
        @endif

        <div class="article-content">

            <span class="category">
                {{ $article->categorie->nom ?? 'Général' }}
            </span>

            <h1 class="title">{{ $article->titre }}</h1>

            <div class="meta">
                <span>Par {{ $article->user->name ?? 'Anonyme' }}</span>
                <span class="dot">•</span>
                <span>{{ $article->created_at->format('d M Y') }}</span>
            </div>

            <div class="content">
                {!! nl2br(e($article->contenu)) !!}
            </div>

        </div>

    </article>

</div>

</body>
</html>