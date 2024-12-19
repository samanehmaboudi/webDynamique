<h1>Liste des articles du forum</h1>

<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Créé par</th>
            <th>Date de publication</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $row['title']; ?></td>
            <td><?= $row['username']; ?></td>
            <td><?= $row['date_created']; ?></td>
            <td>
                <a href="?controller=forum&function=edit&id=<?= $row['id']; ?>" class="btn">Voir</a>
                <a href="?controller=forum&function=edit&id=<?= $row['id']; ?>" class="btn">Modifier</a>
                <a href="?controller=forum&function=delete&id=<?= $row['id']; ?>" class="btn"
                   onclick="return confirm('Voulez-vous vraiment supprimer cet article ?')">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>