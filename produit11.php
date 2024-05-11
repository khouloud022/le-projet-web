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
    <h1>RIVADERM CLARIS SUN SPF50+ 50ML</h1>
    <div class="ser">
        <img src="nv images/im11.jpg">
        <div class="t">
            <p>RIVADERM - Claris sun <br> 
                crème SPF50+ teintée, attenue et prévient l'apparition des taches brunes <br>
                Clarissun offre une portection supérieur pour la peau qui ne supporte pas le soleil ou dans le cas
             <br>Du soleil était incendiaire.
             <br>Appliquer uniformément avant toute exposition Renouveler toutes les 2 heures.  
            </p>
            <p><span class="pr"> 49.000 TND</span></p>
            <p><span class="prix"><strong>39,200 TND </strong></span></p>
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
    <p><span style="font-size: larger;">L écran solaire CLARIS SUN à très haute protection est une crème teintée SPF 50 + qui attenue et prévient l'apparition des taches brunes. <br>

        Claris sun offre une protection supérieur pour la peau qui ne supporte pas le soleil ou dans le cas du soleil etait incendiaire. <br>
        
        Appliquer uniformément avant toute exposition
        <h2> composition</h2>
    <br> aqua, clycérylstérate,lumiskinsederma, titaniumdioxide and capryliccapric triglycéride and polhydroxysteariccid stearicacid alumina C12-15Alkyl benzoate, isohexadecanecetearylEthylhexanoate and isopropylmyristate, Butylstearate, benzophénone3, methoxylcinnamate,Beeswax, CyclopentasiloxaneCapryliccaprictrglyceride and PPG3, myristyetheradipate and sorbitan, isostéarate, céteareth 25, steareth 2, sorbitan, sesquioléate, Potassium sorbate, benzylalchol, sorbicacid , tocopherol acétate, fragrance. Titaniumdioxide and red iron oxide and yellow iron oxide.</span></p>    

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
