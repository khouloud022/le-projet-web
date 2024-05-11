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
$stmt = $conn->prepare("SELECT * FROM utilisateurs WHERE email = :email");
$stmt->bindParam(':email', $_SESSION['email']);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt = $conn->prepare("SELECT * FROM reclamation WHERE email = :email");
$stmt->bindParam(':email', $_SESSION['email']);
$stmt->execute();
$reclamations = $stmt->fetchAll(PDO::FETCH_ASSOC);
$currentDate = date('m-d');
$userBirthday = date('m-d', strtotime($user['date_de_naissance']));
if ($currentDate == $userBirthday) {
    $to = $user['email'];
    $subject = "Joyeux anniversaire !";
    $message = "Bonjour " . $user['nom'] . ",\n\nJoyeux anniversaire ! Nous vous souhaitons une journée remplie de bonheur et de joie.";
    $headers = "From:rivadermlabo@gmail.com";
    mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <link rel="stylesheet" href="profile.css">
</head>
<body>
  <header>
    <img src="img/back.PNG">
  </header>
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
    <div class="tu">
        <h1> Mon profil </h1>
        <img src="rs/prof.webp" alt="" srcset="">
        <h2>Bienvenue <?php echo $user['nom']; ?></h2>
        <div class="c">
        <a href="sign in.php"> <img src="rs/dec.PNG" alt="" srcset=""> Déconnexion</a>
    </div>
</span>
    </div>
    <div class="profile-info">
      <p><strong>Nom:</strong> <?php echo $user['nom']; ?></p>
      <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
      <p><strong>Date de naissance :</strong> <?php echo $user['date_de_naissance']; ?></p>
      <p><strong> sexe :</strong> <?php echo $user['genre']; ?></p>
      <p><strong>Region :</strong> <?php echo $user['region']; ?></p>
      <button id="edit-profile-btn">Modifier Profil</button>
      
    </div>
    <div class="nr">
    <div class="rec">
       <p><h3> Mes réclamations:</h3>
       <?php foreach ($reclamations as $reclamation) { ?>
            <p><?php echo $reclamation['message']; ?></p>
       <?php } ?>
       </p>
    </div>
    <div class="cr">
        <h3> Les événements de Rivaderm</h3>
        <a href="anniversaire.php"> voir nos événements </a>
    </div>
    </div>
  </div>
  <div id="edit-profile-modal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <h2>Modifier Profil</h2>
      <form id="edit-profile-form" action="edit_profile.php" method="post">
        <label for="new-name">Nouveau Nom:</label>
        <input type="text" id="new-name" name="new-name" required><br><br>
        <label for="new-email">Nouvel Email:</label>
        <input type="email" id="new-email" name="new-email" required><br><br>
        <label for="new-name">date de naissance:</label>
        <input type="date" id="new-date" name="new-date" ><br><br>
        <label for="new-name">changer de région :</label>
        <input type="text" id="new-region" name="new-region" ><br><br>
        <button type="submit">Enregistrer les modifications</button>
      </form>
    </div>
  </div>

  <script >
    document.addEventListener('DOMContentLoaded', function() {
  var modal = document.getElementById('edit-profile-modal');
  var btn = document.getElementById('edit-profile-btn');
  var span = document.getElementsByClassName('close')[0];

  btn.onclick = function() {
    modal.style.display = 'block';
  }

  span.onclick = function() {
    modal.style.display = 'none';
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = 'none';
    }
  }
});

  </script>
</body>
</html>
