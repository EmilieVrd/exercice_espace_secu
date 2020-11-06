<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hole que tal</title>
    <link rel="stylesheet" href="../style.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hey, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Merci d'avoir consulté mon exercice de prairie.</h1>
    </div>
    <p>
        <a href="reset-password.php" class="home-link">Réinitialiser le mot de passe</a>
        <a href="logout.php" class="home-link">Se déconnecter</a>
    </p>
</body>
</html>
