<?php
session_start(); 
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
    if(isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM utilisateurs WHERE email = :email AND mot_de_passe = :password";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($result) {
            $_SESSION['email'] = $email;
            header("Location: profile.php");

            exit();
        } else {
            header("Location: sign in.php");
            exit();
        }
    } else {
        echo "Veuillez remplir tous les champs.";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page de Connexion</title>
  <link rel="stylesheet" href="sign in.css">
</head>
<body>
    <header><img src="img/back.PNG"></header>
    <div class="tete">
      <a href="parapharmcie.php"><strong>Accueil</strong></a>
      <a href="produits.php"><strong>Nos produits</strong></a>
      <a href="sign in.php"><strong>Mon compte</strong></a>
      <a href="conseil.php"><strong>Nos conseils</strong> </a>
      <a href="test contact.php"><strong>Contact</strong></a>
      <a href="anniversaire.php"><strong>Nos événements</strong></a>
      <a href="a propos.php"><strong>A propos</strong></a>
    </div>
    <div class="bordure"></div>
    <div class="container">
      <h1>Connectez-vous rapidement</h1>
      <form action="sign in.php" method="post" id="login-form">
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="password" name="password" id="password" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>
        <input type="reset" value="Réinitialiser">
      </form>
    </div>
    <div class="container">
      <div class="left-section">
        <h2>Créez un compte pour des avantages exclusifs :</h2>
        <ul>
          <li>Offres spéciales et fonctionnalités premium</li>
          <li>Expérience conviviale : enregistrez vos informations pour les futures visites et transactions</li>
          <li>Sécurité renforcée : protégez vos données personnelles et gardez le contrôle sur votre expérience en ligne</li>
        </ul>
      </div>
      <div class="right-section">
        <h2>Vous n'avez pas de compte ?</h2>
        <p>Inscrivez-vous maintenant !</p>
        <a href="sign up.php">S'inscrire</a>
      </div>
    </div>
</body>
</html>
