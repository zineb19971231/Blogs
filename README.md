<p align="center">
  <img src="https://laravel.com/img/logomark.min.svg" width="120" alt="Laravel Logo">
</p>

<h1 align="center">📰 Blog Laravel - Journal</h1>

<p align="center">
Application web de blog développée avec Laravel, permettant de gérer et afficher des articles avec un design moderne et responsive.
</p>

---

## 📌 Description

Ce projet est une application de blog développée avec **Laravel**.  
Il permet aux utilisateurs de :

- Consulter la liste des articles
- Lire un article en détail
- Voir les catégories et les auteurs
- Naviguer dans une interface moderne inspirée des templates professionnels

---

## 🚀 Fonctionnalités

- 📰 Affichage des articles (page index)
- 📖 Page détail d’un article (show)
- 🧑‍💻 Gestion des auteurs (relation avec User)
- 🗂️ Gestion des catégories
- 🖼️ Affichage des images des articles
- 🎨 Design moderne (CSS personnalisé)
- 🔗 Routing avec Laravel

---

## 🛠️ Technologies utilisées

- Laravel
- PHP
- MySQL
- Blade (templating)
- HTML / CSS
- JavaScript (basique)

---

## 📂 Structure du projet
app/
resources/views/
├── articles/
│ ├── index.blade.php
│ └── show.blade.php
public/
├── css/
│ ├── blogs.css
│ └── show.css
routes/
└── web.php

---

## ⚙️ Installation

1. Cloner le projet :

```bash
git clone https://github.com/zineb19971231/Blogs.git
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

📸 Captures d’écran

🏠 Page d’accueil (Index)

📖 Page détail (Show)