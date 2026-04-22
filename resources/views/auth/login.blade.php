<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Login - Blog</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<div class="container">
    
    <!-- LEFT SIDE (IMAGE) -->
    <div class="image-side">
        <img src="{{ asset('images/blogs/1.jpg') }}" alt="Login Image">
    </div>

    <div class="form-side">
        <div class="form-box">
            <h2>Connexion</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Entrer votre email" required>
                </div>

                <div class="input-group">
                    <label>Mot de passe</label>
                    <input type="password" name="password" placeholder="Entrer votre mot de passe" required>
                </div>

                <button type="submit">Se connecter</button>
            </form>
        </div>
    </div>

</div>

</body>
</html>