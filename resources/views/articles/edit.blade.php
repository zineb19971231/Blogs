<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier article</title>
</head>
<body>

<h2>Modifier article</h2>

<form action="{{ route('articles.update', $article->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Titre</label><br>
    <input type="text" name="titre" value="{{ $article->titre }}"><br><br>

    <label>Contenu</label><br>
    <textarea name="contenu">{{ $article->contenu }}</textarea><br><br>

    <label>Statut</label><br>
    <select name="statut">
        <option value="brouillon" {{ $article->statut == 'brouillon' ? 'selected' : '' }}>
            Brouillon
        </option>
        <option value="publie" {{ $article->statut == 'publie' ? 'selected' : '' }}>
            Publié
        </option>
    </select><br><br>

    <label>Catégorie</label><br>
    <select name="categorie_id">
        @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}"
                {{ $article->categorie_id == $categorie->id ? 'selected' : '' }}>
                {{ $categorie->nom }}
            </option>
        @endforeach
    </select><br><br>

    <button type="submit">Modifier</button>
</form>

</body>
</html>