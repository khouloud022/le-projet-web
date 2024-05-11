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
        <img src="nv images/im1.jpg">
        <div class="t">
            <p><span style="color: blue;" >Vivaderm C++ Sérum Vitamine C 30ml 🍊💫 </span><br>
                rivaderm C++ sérum vitamine c 30ml est un soin intensif 4 en 1 hautement antioxydant riche en vitamine c stabilisée multiforme , acide hyaluronique a faible poids moléculaire arbutine , panthenol , et acide azélaique 
            </p>
            <p><span class="pr">59.350 TND</span></p>
            <p><span class="prix"><strong>54.009 TND</strong></span></p>
                <div class="quantite"></div>
                <button onclick="decrementQuantity()">-</button>
                <span id="quantity">1</span>
                <button onclick="incrementQuantity()">+</button>
                <div class="add-to-cart">
                <a href="nv panier.php"><button onclick="addToCart()">Ajouter au panier</button></a></div>
            </div>
        </div>
    </div>
    <h2>Description du produit:</h2>
    <p><span style="font-size: larger;"> Découvrez les 4 effets incroyables sur votre visage après l'utilisation de VITADERM C++! ✨ <br>
        1️⃣ Éclat instantané: Grâce à sa formule riche en vitamine C, votre peau retrouve sa luminosité naturelle. <br>
        2️⃣ Hydratation intense: L'acide hyaluronique présent dans ce sérum assure une hydratation en profondeur, pour une peau douce et souple. <br>
        3️⃣ Réduction des taches pigmentaires: Les actifs comme l'acide azélaïque et l'alpha arbutin aident à atténuer les taches brunes et à uniformiser le teint. <br>
        4️⃣ Protection anti-oxydante: Les puissants anti-oxydants présents dans VITADERM C++ protègent votre peau contre les agressions extérieures et le vieillissement prématuré. <br>
        Offrez à votre peau le meilleur avec VITADERM C++</span></p>    

    <script>
        window.onload = function() {
        var addToCartButton = document.querySelector(".add-to-cart button");
        addToCartButton.onclick = addToCart;

        var quantityElements = document.querySelectorAll(".quantite");
        quantityElements.forEach(function(element) {
            element.onclick = function() {
                this.focus();
            };
            element.onblur = function() {
                updateQuantity(this);
            };
            element.onmouseover = function() {
                this.style.backgroundColor = "lightgray";
            };
            element.onmouseout = function() {
                this.style.backgroundColor = "transparent";
            };
            element.onchange = function() {
                updateQuantity(this);
            };
        });
    };

    function addToCart() {
        var quantity = document.getElementById("quantity").textContent;
        alert(quantity + " élément(s) ajouté(s) au panier ");
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

    function updateQuantity(element) {
        var value = parseInt(element.textContent);
        if (isNaN(value) || value < 1) {
            element.textContent = 1;
        }
    }
</script>

</body>
</html>