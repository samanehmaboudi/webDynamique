<h1>Inscription</h1>

<form action="?controller=user&function=user" method="post" class="form-container">
    
    <?php 
    if (session_status() === PHP_SESSION_NONE) { 
        session_start(); 
    }
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    ?>
    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']); ?>">

    
    <label for="name">Nom</label>
    <input type="text" name="name" id="name" placeholder="Votre nom" required>

    
    <label for="email">Email</label>
    <input type="email" name="email" id="email" placeholder="Votre email" required>

   
    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password" placeholder="Votre mot de passe" required>


    <label for="birthdate">Date de naissance</label>
    <input type="date" name="birthdate" id="birthdate" required>

    <input type="submit" value="S'inscrire" class="btn btn-primary">
</form>
