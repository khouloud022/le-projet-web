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
        <img src="nv images/im2.jpg">
        <div class="t">
            <p><span style="color: blue;" >DÉODORANT ECLAIRCISSANT ANTI TRANSPIRANT 48H 50ML</span><br>
                ✨ Nouveau Déo Éclaircissant ! 💫 Dites adieu aux odeurs et bonjour à des aisselles éclatantes de beauté ! 🌟    
            </p>
            <p><span class="pr"> 23.800 TND</span></p>
            <p><span class="prix"><strong>18.600 TND</strong></span></p>
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
    <p><span style="font-size: larger;">Ce produit développé par le laboratoire Rivaderm est un déodorant anti-transpirant et éclaircissant qui agit efficacement contre les tâches et les mauvaises odeurs provoquées par la transpiration excessive durant la chaleur ou activités physique intenses Ce déodorant est riche en lemon peel et en vitamine E , permettant de minimiser l’hyperpigmentation cutanée au niveau des aisselles en apportant un effet éclaircissant remarquable et en garantissant une protection et une fraicheur qui durent toute la journée</span></p>    

    <script>
        function addToCart() {
            var quantity = document.getElementById("quantity").textContent;
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
