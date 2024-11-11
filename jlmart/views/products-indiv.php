<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/products-indiv.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Products</title>
</head>
<body>
<div class = "main-container">
<?php include 'nav.php'; ?>

<div class="product-container">
    <div class ="left">
        <div class="product-image">
            <img src = "images/product-imgg.svg">
        </div>
    </div>
    <div class="right">
    <h1> Samyang/Buldak </h1>

    <h3>BY <span>JL MART ASIAN FOOD</span></h3>
    <h2>PHP 30.00 </h2>
    <p>Samyang is a popular Korean brand known for its spicy instant noodles. Their signature "Buldak Bokkeum Myun" (fire chicken noodles) features intensely hot and savory flavors, attracting fans worldwide. </p>

    <div class="add-to-cart">
        <div class="quantity-wrapper">
            <button class="minus-btn" onclick="updateQuantity(-1)">-</button>
            <input type="number" id="quantity" value="1" min="1">
            <button class="plus-btn" onclick="updateQuantity(1)">+</button>
        </div>
        <button class="add">Add to Cart</button>
    </div>
    </div>
</div>

</div>
<?php include 'footer.php'; ?>

<script>
function updateQuantity(change) {
    var quantityInput = document.getElementById('quantity');
    var currentQuantity = parseInt(quantityInput.value);
    var newQuantity = currentQuantity + change;
    if (newQuantity >= 1) {
        quantityInput.value = newQuantity;
    }
}
</script>
</body>
</html>