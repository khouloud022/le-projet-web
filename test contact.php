<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = ""; 
$db_name = "projet";
$conn = "";
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
    $message = $_POST['message'];
    $sql = "INSERT INTO reclamation (nom, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $nom);
    $stmt->bindParam(2, $email);
    $stmt->bindParam(3, $message);
    $stmt->execute();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test contact.css">
</head>
<body>
    <header><img src="rivaderm images\back.PNG" ></header>
    <div class="tete">
    <a href="parapharmcie.php"><strong>Accueil</strong></a>
      <a href="produits.php"><strong>Nos produits</strong></a>
      <a href="sign in.php"><strong>Mon compte</strong></a>
      <a href="conseil.php"><strong>Nos conseils</strong> </a>
      <a href="test contact.php"><strong>Contact</strong></a>
      <a href="anniversaire.php"><strong>Nos événements</strong></a>
      <a href="a propos.php"><strong>A propos</strong></a>
    </div>
    <br>
    <div class="bordure"></div>
    <br>
    <br>
    <span style="text-align: center;text-decoration: underline;"> <h1>Contactez-nous</h1></span>
    <div class="res">
        <div class="cc">
            <img src="rs/teleph.PNG" alt="telephone">
            <p> Telephone </p>
              <p>  27 366 667</p>
        </div>
        <div class="cc">
            <img src="rs/email.PNG" alt="email">
            <p> E-mail </p>
            <a href="mailto:"rivadermlabo@gmail.com>rivadermlabo@gmail.com</a>
        </div>
        <div class="cc">
            <img src="rs/loca.PNG" alt="">
            <p>Adresse</p>
            <p> Centre Urbain Nord , Tunis, Tunisia.</p>
        </div>
    </div>
    <span style="color:rgb(157, 4, 40) ;text-align: center;text-decoration: none;"><h1>N'hésitez pas de partager avec nous vos feedback produits!!</span></h1>
    <br>
            <div class="contact-form">
            <span style="color: rgb(27, 0, 100);"><h2>Formulaire de contact</span></h2>
            <form action="test contact.php" method="POST">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
                <label for="email">E-mail :</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
<div class="bordure"></div>
<br>
    <div class="fi">
    <img src="img/img10.jpg" alt="" srcset="">
    <p>   Commandez maintenant et profitez de nos offres       </p>
    
</footer>

</body>
</html>