<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parapharmacie</title>
    <link rel="stylesheet" href="nv panier.css">
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
        <section id="catalogue">
            <section id="catalogue">
                <h2>Catalogue des produits</h2>
                <div id="carousel" class="carousel">
                    <img id="productImage" src="nv images/im17.jpg" alt="Produit 1">
                </div>
            </section>
        </section>
        <div class="ps">
            <div class="produit">
                <div class="pr">
                <img src="nv images/im1.jpg" alt="Produit 1">
            </div>
                <h3>Produit 1</h3>
                <p>Description du produit 1</p>
            <div class="pa">
                <img src="rs/panier.webp" alt="Panier">
            </div>
                <button onclick="acheterProduit(1)">Acheter</button>
            </div>
            <div class="reclamation">
                <h2>Formulaire de réclamation</h2>
                <form id="reclamationForm">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required><br>
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required><br>
                    <label for="message">Message :</label><br>
                    <textarea id="message" name="message" required></textarea><br>
                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    <footer>
        <p>&copy; 2024 Parapharmacie. Tous droits réservés.</p>
    </footer>
    <script>
        function acheterProduit(idProduit) {
            alert("Produit " + idProduit + " acheté , passez au paiement !");
        }

        document.getElementById("reclamationForm").addEventListener("submit", function(event) {
            event.preventDefault();
            alert("Réclamation envoyée !");
        });

        let currentImageIndex = 0;
        const images = [
            "nv images/im17.jpg",
            "nv images/im16.jpg",
            "nv images/im15.jpg",
            "nv images/im14.jpg",
            "nv images/im13.jpg",
            "nv images/im12.jpg",
            "nv images/im11.jpg",
            "nv images/im10.jpg",
            "nv images/im1.jpg"
        ];
        const totalImages = images.length;
        const productImage = document.getElementById("productImage");

        function changeImage() {
            productImage.src = images[currentImageIndex];
            currentImageIndex = (currentImageIndex + 1) % totalImages;
        }
        setInterval(changeImage, 1500);
    </script>
</body>
</html>
