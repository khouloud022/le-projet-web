<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = ""; 
$db_name = "projet";
try {
    $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['mot_de_passe'];
    $birthdate = $_POST['date_de_naissance'];
    $genre = $_POST['genre'];
    $region = $_POST['region'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe, date_de_naissance, genre, region) VALUES (:nom, :email, :mot_de_passe, :date_de_naissance, :genre, :region)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":mot_de_passe", $password);
    $stmt->bindParam(":date_de_naissance", $birthdate);
    $stmt->bindParam(":genre", $genre);
    $stmt->bindParam(":region", $region);
    $stmt->execute();
    $stmt->closeCursor();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="sign up.css">
</head>
<body>
<header><img src="img/back.PNG"></header>
<div class="tete">
    <a href="parapharmacie.php"><strong>Accueil</strong></a>
    <a href="produits.php"><strong>Nos produits</strong></a>
    <a href="sign in.php"><strong>Mon compte</strong></a>
    <a href="conseil.php"><strong>Nos conseils</strong> </a>
    <a href="test contact.php"><strong>Contact</strong></a>
    <a href="anniversaire.php"><strong>Nos événements</strong></a>
    <a href="a propos.php"><strong>A propos</strong></a>
</div>
<div class="bordure"></div>
<div class="container">
    <form action="" method="post" id="signup-form" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="name">Nom complet</label>
            <input type="text" name="nom" id="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" name="mot_de_passe" id="password" required>
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirmez le mot de passe</label>
            <input type="password" name="confirm-password" id="confirm-password" required>
        </div>
        <div class="form-group">
            <label for="birthdate">Date de naissance</label>
            <input type="date" name="date_de_naissance" id="birthdate" required>
        </div>
        <div class="form-group">
            <label for="gender">Genre</label>
            <select name="genre" id="gender" required>
                <option value="">Sélectionnez votre genre</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
        </div>
        <div class="form-group">
            <label for="region">Région</label>
            <input type="text" name="region" id="region" placeholder="Entrez votre région" required>
        </div>
        <button type="submit">S'inscrire</button>
    </form>
</div>

<script>
    function validateForm() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm-password").value;
        if (password != confirmPassword) {
            alert("Les mots de passe ne correspondent pas !");
            return false;
        }
        return true;
    }
    function onFocusInput() {
    var inputs = document.querySelectorAll('input[type="text"], input[type="email"], input[type="password"], input[type="date"], select');
    inputs.forEach(function(input) {
        input.addEventListener('focus', function() {
            this.style.borderColor = '#4caf50';
            this.style.outline = 'none';
        });
    });
}

</script>
<span style="text-align: center;"> <p><a href="a propos.php">En savoir plus sur nous</a></p></span>

</body>
</html>
