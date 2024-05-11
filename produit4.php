<?php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="produit.css">
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
    <div class="bordure"></div><br>
    <div class="ser">
        <img src="nv images/im4.jpg">
        <div class="t">
            <p><span style="color: blue;" >Rivaderm Hydra Fresh</span><br>
            Brume tonique fraiche<br>

            Hydrate - apaise - rafraichit 
                    tous types de peaux <br>
                    
            à base d'acide hyaluronique & d'eau de rose</br>
                    
            Sans parabène - hypoallergénique</br>
                    
            Contenance : 250ml</br>
            </p>
            <p><span class="pr">35.000 TND</span></p>
            <p><span class="prix"><strong>28.000 TND</strong></span></p>
                <div class="quantite"></div>
                <button onclick="decrementQuantity()">-</button>
                <span id="quantity">1</span>
                <button onclick="incrementQuantity()">+</button>
                <div class="add-to-cart">
                <button onclick="addToCart()">Ajouter au panier</button></div>
            </div>
        </div>
    </div>
    <h2>Description du produit:</h2>
    <p><span style="font-size: larger;"> 🌹 Plongez dans la fraîcheur florale avec notre Brume Tonique #HYDRA_FRESH à l'Eau de Rose ! 🌹💦🌿 Notre brume tonique rafraîchissante est infusée d'eau de rose pure, pour une sensation apaisante et hydratante sur votre peau.✨ Offrez-vous une pause bien-être à tout moment de la journée avec cette brume délicate, qui revitalise votre teint et laisse un doux parfum floral. <br>💦 Utilisez-la après le nettoyage du visage pour équilibrer et préparer votre peau, ou en cours de journée pour une touche de fraîcheur instantanée.</span></p>    

    <script>
        function addToCart() {
            var quantity = document.getElementById("quantity").textContent;
            var prix=document.getElementById("prix").textContent;
            alert(quantity + " élement(s) ajouté au panier ");
        }

        function incrementQuantity() {
            var quantityElement = document.getElementById("quantity");
            var quantity = parseInt(quantityElement.textContent);
            quantityElement.textContent = quantity + 1;
        }

        function decrementQuantity() {
            var quantityElement = document.getElementById("quantity");
            var quantity = parseInt(quantityElement.textContent);
            if (quantity > 1) {
                quantityElement.textContent = quantity - 1;
            }
        }
    </script>
</body>
</html>
