<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter Article</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>

<div class="container">

<a href="{{ route('articles.index') }}" class="btn-back">
    Retour aux articles
</a>
    <h2>Ajouter un article</h2>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('articles.store') }}">
        @csrf

        <div class="input-box">
            <label>Titre</label>
            <input type="text" name="titre">
        </div>

        <div class="input-box">
            <label>Contenu</label>
            <textarea name="contenu"></textarea>
        </div>

        <div class="input-box">
            <label>Statut</label>
            <select name="statut">
                <option value="brouillon">Brouillon</option>
                <option value="publie">Publié</option>
            </select>
        </div>

        <div class="input-box">
            <label>Catégorie</label>
            <select name="categorie_id">
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}">
                        {{ $categorie->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Ajouter</button>
    </form>

</div>

</body>
</html>