<?php
session_start();

// Si l'utilisateur n'est pas connecté, redirection vers login.php
if (!($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<head><meta charset="UTF-8"><title>Profil</title></head>
<body>
    <h1>Bienvenue, <?= htmlspecialchars($_SESSION['login']) ?></h1>
    <p><a href="deconnexion.php">Se déconnecter</a></p>
</body>
</html>