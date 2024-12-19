<form action="?controller=forum&function=store" method="post">
    <label for="title">Titre :</label>
    <input type="text" name="title" id="title" placeholder="Titre de l'article" required>

    <label for="content">Contenu :</label>
    <textarea name="content" id="content" placeholder="Contenu de l'article" required></textarea>

    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">

    <input type="submit" value="Créer l'article">
</form>
