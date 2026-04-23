<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un article</title>
</head>
<body>

<h2>Créer un article</h2>

<form action="{{ route('articles.store') }}" method="POST">
    @csrf

    <label>Titre</label><br>
    <input type="text" name="titre" value="{{ old('titre') }}"><br><br>

    <label>Contenu</label><br>
    <textarea name="contenu">{{ old('contenu') }}</textarea><br><br>

    <label>Statut</label><br>
    <select name="statut">
        <option value="brouillon">Brouillon</option>
        <option value="publie">Publié</option>
    </select><br><br>
    <label>Catégorie</label><br>
    <select name="categorie_id">
        @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}">
                {{ $categorie->nom }}
            </option>
        @endforeach
    </select><br><br>

    <button type="submit">Créer</button>
</form>

</body>
</html>