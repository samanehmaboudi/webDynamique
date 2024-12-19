<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum MVC</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="?controller=forum&function=index">Accueil</a></li>
            <li><a href="?controller=user&function=create">Créer un utilisateur</a></li>
            <li><a href="?controller=user&function=login">Connexion</a></li>
            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="?controller=forum&function=create">Créer un article</a></li>
                <li><a href="?controller=user&function=logout">Déconnexion</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        <p>&copy; 2024 Forum MVC. Tous droits réservés.</p>
    </footer>
</body>
</html>
