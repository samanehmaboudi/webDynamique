<h1>Modifier l'article</h1>

        <?php if (isset($data)): ?>
            <form action="?controller=forum&function=update&id=<?= $data['id']; ?>" method="post">
                <label for="title">Titre :</label>
                <input type="text" name="title" id="title" placeholder="Titre de l'article" 
                       value="<?= $data['title']; ?>" required>

                <label for="content">Contenu :</label>
                <textarea name="content" id="content" placeholder="Contenu de l'article" required><?= $data['content']; ?></textarea>

                <input type="submit" value="Mettre à jour l'article">
            </form>
        <?php else: ?>
            <p>Article non trouvé ou vous n'avez pas l'autorisation de modifier cet article.</p>
            <a href="?controller=forum&function=index">Retour à la liste des articles</a>
        <?php endif; ?>