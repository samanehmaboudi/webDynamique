<h1>Connexion</h1>

<form action="?controller=user&function=authenticate" method="post" class="form-container">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Entrez votre email" required>

    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password" placeholder="Entrez votre mot de passe" required>

    <input type="submit" value="Se connecter" class="btn btn-primary">
</form>
