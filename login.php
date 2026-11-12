<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['login']);
    if (!empty($login)) {
        $_SESSION['login'] = $login;
        header("Location: profil.php");
        exit;
    } else {
        echo "Veuillez entrer un login valide.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Connexion</title></head>
<body>
    <h2>Connexion</h2>
    <form method="POST">
        <label>Login : <input type="text" name="login" required></label>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>