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
    <h1>RIVADERM TRIO SERUM VITADERM 3*15ML</h1>
    <div class="ser">
        <img src="nv images/im15.jpg">
        <div class="t">
            <p>RIVADERM TRIO SERUM VITADERM est composé de :
                <ul>
                    <li>Serum à l'acide hyaluronique + vitamine B3 </li>
                    <li>Serum à la vitamine C</li> 
                    <li>Serum au retinol + vitamine E</li>
                </ul>
            </p>
            <p><span class="pr">93.000 TND</span></p>
            <p><span class="prix"><strong>74.400 TND</strong></span></p>
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
    <p><span style="font-size: larger;">Le TRIO VITADERM est un soin complet concentré en actifs vitaminés synergiques à même de procurer à la peau : Une hydratation profonde grâce à l'acide hyaluronique de faible poids moléculaire et la vitamine B3 qui sublime l'éclat et améliore l'apparence de la peau en réduisant les rides et les ridules. Une régénération et revitalisation rapide grâce à l'action anti-âge puissante des rétinoides (vitamine A) et vitamine E connues pour leur capacité à doper la synthèse au collagène. Une action booster d'éclat-bonne mine grâce à la vitamine C stabilisée à très haute concentration qui clarifie, le teint et réduit l'hyperpigmentation. conseils d'utilisation: <br>
        *SERUM A L'ACIDE HYALURONIQUE+VITAMINE B3 : à appliquer le soir sur une peau bien nettoyée. <br>
        *SERUM A LA VITAMINE C : à appliquer le soir, la vitamine C rend la peau plus lumineuse. <br>
        *SERUM AU RETINOL+VITAMINE E : à appliquer le soir, le rétinol est un actif qui agit directement sur les signes de vieillissement</span></p>    

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
