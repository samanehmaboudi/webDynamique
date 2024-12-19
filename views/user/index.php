<h1>Articles du Forum</h1>

<div class="articles-container">
    <?php foreach ($data as $article): ?>
        <article class="article-preview">
            <h2>
                <a href="?controller=forum&function=show&id=<?= htmlspecialchars($article['id']); ?>">
                    <?= htmlspecialchars($article['title']); ?>
                </a>
            </h2>
            <p class="article-date">
                <em>Publié le <?= htmlspecialchars($article['created_at']); ?></em>
            </p>
            <p class="article-content">
                <?= htmlspecialchars(substr($article['content'], 0, 100)); ?>...
            </p>
        </article>
    <?php endforeach; ?>
</div>
