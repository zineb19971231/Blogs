<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journal</title>

    <!-- CSS séparé -->
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
</head>

<body>

<nav class="navbar">
    <a href="/" class="logo">JOURNAL</a>

    <div class="links">
        <a href="/">Accueil</a>
        <a href="/login">Connexion</a>
    </div>
</nav>

<div class="container">

    <h1 class="title">Tous les Articles </h1>

    @if($articles->count() > 0)

        <div class="article-list">

            @foreach($articles as $article)
            <div class="card">

                <span class="category">
                    {{ $article->categorie->name ?? 'Général' }}
                </span>

                <h2 class="article-title">
                    {{ $article->titre }}
                </h2>

                <p class="date">
                    {{ $article->created_at->format('d M Y') }}
                </p>

                <p class="content">
                    {{ Str::limit($article->contenu, 180) }}
                </p>

            </div>
            @endforeach

        </div>

    @else
        <p class="empty">Aucun article disponible</p>
    @endif

</div>

</body>
</html>