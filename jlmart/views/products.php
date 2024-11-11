<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/products.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Products</title>
</head>
<body>
<div class = "main-container">
<?php include 'nav.php'; ?>

    <div class="banner">
        <div class="banner1">
            <p>.</p>
        </div>

        <div class="banner2">
            <p>.</p>
        </div>
    </div>

</div>

    <div class="products-container">
    <div class="topper">
        <h1> Total Products: <span>20 Products</span> </h1>
        <img src = "images/cart-products.svg" alt="line">
    </div>

    <div class="suggestions">
        <div class="suggestions-right">
        <button class ="btn" id="btn1">Groceries </button>
        <button class ="btn" id="btn2">Snacks</button>
        <button class ="btn" id="btn3">Chocolates</button>

        <select id="dropdown">
            <option value="option1">Sort By</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
        </select>
        </div>

        <div class="suggestions-left">
        <div class="wrapper">
            <input type="text" id="search" placeholder="Find Something Yummy">
            <button id="searchBtn">Search</button>
        </div>
        </div>
</div>

    <div class="product-container">

    <div class="product-card">
        <div class = "img-product">
            <img src = "images/product-image.svg">
        </div>
        <div class = "info-product">
            <div class="row1">
                    <h1>Php 30.00</h1>
                    <h3>| Sold 20</h3>
            </div>
            <div class="row2">
                    <h2>Samyang / Buldak</h2>
            </div>
            <div class="row3">
                    <div class="inner-col"><a href="#" class="btn">View Product</a></div>
                <button class="btn2"><img src="images/cart-card.svg" alt="Add to Cart"></button>
            </div>

        </div>
    </div>

    <div class="product-card">
        <div class = "img-product">
            <img src = "images/product-image.svg">
        </div>
        <div class = "info-product">
            <div class="row1">
                    <h1>Php 30.00</h1>
                    <h3>| Sold 20</h3>
            </div>
            <div class="row2">
                    <h2>Samyang / Buldak</h2>
            </div>
            <div class="row3">
                    <div class="inner-col"><a href="#" class="btn">View Product</a></div>
                <button class="btn2"><img src="images/cart-card.svg" alt="Add to Cart"></button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class = "img-product">
            <img src = "images/product-image.svg">
        </div>
        <div class = "info-product">
            <div class="row1">
                    <h1>Php 30.00</h1>
                    <h3>| Sold 20</h3>
            </div>
            <div class="row2">
                    <h2>Samyang / Buldak</h2>
            </div>
            <div class="row3">
                    <div class="inner-col"><a href="#" class="btn">View Product</a></div>
                <button class="btn2"><img src="images/cart-card.svg" alt="Add to Cart"></button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class = "img-product">
            <img src = "images/product-image.svg">
        </div>
        <div class = "info-product">
            <div class="row1">
                    <h1>Php 30.00</h1>
                    <h3>| Sold 20</h3>
            </div>
            <div class="row2">
                    <h2>Samyang / Buldakasdasdsaas</h2>
            </div>
            <div class="row3">
                    <div class="inner-col"><a href="#" class="btn">View Product</a></div>
                <button class="btn2"><img src="images/cart-card.svg" alt="Add to Cart"></button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class = "img-product">
            <img src = "images/product-image.svg">
        </div>
        <div class = "info-product">
            <div class="row1">
                    <h1>Php 30.00</h1>
                    <h3>| Sold 20</h3>
            </div>
            <div class="row2">
                    <h2>Samyang / Buldak</h2>
            </div>
            <div class="row3">
                    <div class="inner-col"><a href="#" class="btn">View Product</a></div>
                <button class="btn2"><img src="images/cart-card.svg" alt="Add to Cart"></button>
            </div>
        </div>
    </div>


    <div class="product-card">
        <div class = "img-product">
            <img src = "images/product-image.svg">
        </div>
        <div class = "info-product">
            <div class="row1">
                    <h1>Php 30.00</h1>
                    <h3>| Sold 20</h3>
            </div>
            <div class="row2">
                    <h2>Samyang / Buldak</h2>
            </div>
            <div class="row3">
                    <div class="inner-col"><a href="#" class="btn">View Product</a></div>
                <button class="btn2"><img src="images/cart-card.svg" alt="Add to Cart"></button>
            </div>
        </div>
    </div>


</div>

    </div>



<?php include 'footer.php'; ?>

<script>
        document.getElementById('searchBtn').addEventListener('click', function() {
            var query = document.getElementById('search').value;
            alert('You searched for: ' + query);
        });
</script>
</body>
</html>