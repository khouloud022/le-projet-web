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
        <h1>Crème hydratante éclaircissante <br> - spf30 - Rivaderm Hydra Clear - 50ml</h1>
        <div class="ser">
            <img src="nv images/im7.jpg">
            <div class="t">
                <p>Rivaderm - Hydra Clear  <br>
                    Hydra Clear est une Crème hydratante éclaircissante à protection solaire spf 30
                </p>
                <p><span class="pr">40.000 TND</span></p>
                <p><span class="prix"><strong>36.000 TND</strong></span></p>
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
        <p><span style="font-size: larger;">  Le manque d'hydratation 💦 de la peau et les agression extérieurs provoquent ride et vieillissement prématuré.
            Pour la protèger, il est essentiel de lui apporter l'hydratation dont elle a besoin 💆🏻‍♀️
            La crème hydratante est la base de toute routine de soin 😉 découvrez notre crème hydratante Hydra Clear 👌🏻 </span></p>    
    
        <script>
            function addToCart() {
                var quantity = document.getElementById("quantity").textContent;
                // Add your logic to add the product to the cart here
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
   