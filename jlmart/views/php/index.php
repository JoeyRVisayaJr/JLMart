<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Homepage</title>
</head>
<body>
<div class = "main-container">
<?php include 'nav.php'; ?>

    <div class = "banner"> 
        <div class = "left">
            <div class = "banner-text"> 
            <h2>BIG SALE! </h2>
            <p>Don't miss out! Grab your favorites before they're gone! </p>
            <button class = "banner-btn">Shop Now! </button>
            </div>
            <div class = "banner-img">
                <img src = "../images/banner-img.svg">
            </div>
        </div>

        <div class = "right">
            <div class = "top-right">
                <p>Enjoy up to <span>30%</span>
                    OFF Product Discount</p>
            </div>
            <div class = "down-right">
            <div class="down-right-text">
                <p>
                    Don't miss out! <a href="userLogin.php">Log in</a> to access our other exclusive deals!
                </p>
            </div>
            </div>
        </div>
    </div>

    <div class = "category"> 
        <h1> Explore popular products </h1>
        <img src = "../images/category-homepage.svg">
    </div>

    <div class = "category-container"> 
     <div class = "category-card">
        <img src = "../images/category1.svg">
        <p> Groceries </p>
     </div>

     <div class = "category-card2">
        <img src = "../images/category2.svg">
        <p> Beverages </p>
     </div>

     <div class = "category-card">
        <img src = "../images/category3.svg">
        <p> Chocolates </p>
     </div>
    </div>

    <div class = "reviews-container">
        <h1> Review and Rating </h1>

        <div class ="comments"> 
            <div class="top-comment"> 

                <div class="top-left-comment">
                 <img src = "../images/user-icon.svg">
                    <div class = "name-date">
                        <h2>Your name here </h2>
                        <h3>December 24,2023 </h3>
                    </div>
                </div>

                <div class="top-right-comment">
                    <div class = "rate">   
                        Satisfied on Product
                    </div>
                    <div class = "heart">
                    <button class="heart-button" onclick="toggleHeart()">&#x2661;</button>
                    <p> 2</p>
                    </div>
                </div>
            </div>
            <div class = "main-commnet">
                <p> As a user, I can update my account information, such as my name, email, or password, at any time. As a user, I can update my account information, such as my name, email, or password, at any time. </p>
            </div>
        </div>


        <div class ="comments"> 
            <div class="top-comment"> 

                <div class="top-left-comment">
                 <img src = "../images/user-icon.svg">
                    <div class = "name-date">
                        <h2>Your name here </h2>
                        <h3>December 24,2023 </h3>
                    </div>
                </div>

                <div class="top-right-comment">
                    <div class = "rate2">   
                        Rude Service
                    </div>
                    <div class = "heart">
                    <button class="heart-button" onclick="toggleHeart()">&#x2661;</button>
                    <p> 2</p>
                    </div>
                </div>
            </div>
            <div class = "main-commnet">
                <p> As a user, I can update my account information, such as my name, email, or password, at any time. As a user, I can update my account information, such as my name, email, or password, at any time. </p>
            </div>
        </div>


        <div class ="comments"> 
            <div class="top-comment"> 

                <div class="top-left-comment">
                 <img src = "../images/user-icon.svg">
                    <div class = "name-date">
                        <h2>Your name here </h2>
                        <h3>December 24,2023 </h3>
                    </div>
                </div>

                <div class="top-right-comment">
                    <div class = "rate2">   
                        Rude Service
                    </div>
                    <div class = "heart">
                    <button class="heart-button" onclick="toggleHeart()">&#x2661;</button>
                    <p> 2</p>
                    </div>
                </div>
            </div>
            <div class = "main-commnet">
                <p> As a user, I can update my account information, such as my name, email, or password, at any time. As a user, I can update my account information, such as my name, email, or password, at any time. </p>
            </div>
        </div>
    </div>
</div>
    
<?php include 'footer.php'; ?>

<script>
    function toggleHeart(event) {
        const button = event.target;
        button.classList.toggle('liked');
        button.innerHTML = button.classList.contains('liked') ? '&#x2665;' : '&#x2661;';
    }

    document.querySelectorAll('.heart-button').forEach(button => {
        button.addEventListener('click', toggleHeart);
    });
</script>


</body>
</html>