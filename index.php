<?php
session_start();
if (isset($_SESSION['connexion']) && !empty($_SESSION['connexion'])) {
    header('Location: ./profil.php');
}
?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="action_enregistrement.php" method="post">
        <input type="text" placeholder="Nom" name="name"><br>
        <input type="tel" placeholder="Téléphone" name="phone"><br>
        <input type="email" placeholder="Email" name="email"><br>
        <select name="genre">
            <option value="m">M</option>
            <option value="f">F</option>
        </select><br>
        <input type="password" placeholder="Mot de passe" name="password"><br>
        <input type="submit" value="Envoyer"><br>
    </form>
    <?= (isset($_GET['error'])) ? $_GET['error'] : "" ?>
</body>
</html>