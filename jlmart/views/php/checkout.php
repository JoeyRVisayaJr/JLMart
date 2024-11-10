<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/checkout.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Checkout</title>
</head>
<body>
    <div class = "main-container">
    <?php include 'nav.php'; ?>
    
    <h2 class = "title"> Shipping Address </h2>
    <form method="POST" action="processAccountSettings.php">
        <div class="first-row">
            <div>
                <label for="country">Country :</label><br>
                <input type="text" id="country" name="country" placeholder="Enter your country here"><br><br>
            </div>
            <div>
                <label for="city">City:</label><br>
                <input type="text" id="city" name="city" placeholder="Enter your city here"><br><br>
            </div>
        </div>

        <div class="second-row">
            <label for="address">Complete Address: </label><br>
            <input type="text" id="address" name="address" placeholder="Enter your complete address here"><br><br>
        </div>
        
        <div class="first-row">
            <div>
                <label for="zipcode">Zip Code: </label><br>
                <input type="number" id="zipcode" name="zipcode" placeholder="Enter your zip code here"><br><br>
            </div>
            <div>
                <label for="landmark">Landmark: </label><br>
                <input type="text" id="landmark" name="landmark" placeholder="Enter your landmark here"><br><br>
            </div>
        </div>

        <h2 class = "title"> Choose Payment Method </h2>
        <div class="mode1">
            <div class="checkbox">
                <input type="radio" id="cod" name="payment-method" value="cod">
                <label for="cod" class="mode">Cash on Delivery</label><br>
            </div>
        </div>

        <div class="mode1">
            <div class="checkboxx">
                <input type="radio" id="gcash" name="payment-method" value="gcash">
                <label for="gcash" class="mode">Gcash</label><br>
            </div>
            <div class="gcash-ins">
                <div class="left">
                    <img class="gcash-logo" src="../images/gcash-num.svg" alt="gcash-num">
                </div>
                <div class="right">
                    <h1>GCASH NUMBER: </h1>
                    <h2>Mico Andrado</h2>
                    <h3>+63 912 345 6789</h3>
                    <ol>
                        <li>Take a screenshot of the GCash receipt.</li>
                        <li>Click “Upload” and select the screenshot.</li>
                        <li>Confirm and upload.</li>
                        <li>Verify the receipt is clear.</li>
                        <li>Refer from the sample receipt</li>
                    </ol>
                    <label for="fileToUpload" class="custom-file-input" id="fileLabel">Upload Screenshot</label>
                    <input type="file" name="fileToUpload" id="fileToUpload" onchange="updateFileName()">
                </div>
            </div>
        </div>


        <div class="summary">
            <h2 class="order-title">Order Summary</h2>
            <hr>
            <div class="summary-row">
            <div class="summary-item">
                <p>Subtotal:</p>
                <span>PHP100.00</span>
            </div>
            <div class="summary-item">
                <p>Shipping:</p>
                <span>PHP10.00</span>
            </div>
            </div>
            <hr>
            <div class="summary-total">
            <p>Total:</p>
            <span>PHP110.00</span>
            </div>
        </div>
        <div class ="checkout">
            <button type="submit" class ="checkout-btn">Checkout</button>
        </div>
    </form>

    <div class="popup-overlay"></div>
    <div class="popup">
        <h2>Rate and Review</h2>
        <h3> Put your ratings here </h3>
        <form method="POST" action="submitReview.php">
            <div class="rating-row">
            <div class ="satisfied">
                <label for="satisfied" class="clickable-label">SATISFIED PRODUCT:</label>
                <input type="radio" id="satisfied-product" name="rating" value="satisfied-product">
            </div>
            <div  class ="bad">
                <label for="bad" class="clickable-label">BAD PRODUCT:</label>
                <input type="radio" id="bad-product" name="rating" value="bad-product">
            </div>
            </div>
            <div class="rating-row">
            <div  class ="satisfied">
                <label for="satisfied" class="clickable-label">SATISFIED SERVICE:</label>
                <input type="radio" id="satisfied-service" name="rating" value="satisfied-service">
            </div>
            <div class ="bad">
                <label for="bad" class="clickable-label">BAD SERVICE:</label>
                <input type="radio" id="bad-service" name="rating" value="bad-service">
            </div>
            </div>
            <p>Put your review below:</p>
            <textarea id="review" name="review" placeholder="Enter your review here" rows="4" cols="50" required></textarea>
            <button type="submit" class="submit-review">POST</button>
        </form>
    </div>
    </div>

    </div>
    <?php include 'footer.php'; ?>

    <script>
                
        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault();
            document.querySelector('.popup-overlay').style.display = 'block';
            document.querySelector('.popup').style.display = 'block';
        });

        function closePopup() {
            document.querySelector('.popup-overlay').style.display = 'none';
            document.querySelector('.popup').style.display = 'none';
            document.querySelector('form').submit();
        }

        function updateFileName() {
            var fileInput = document.getElementById('fileToUpload');
            var fileLabel = document.getElementById('fileLabel');
            fileLabel.textContent = fileInput.files[0].name;
        }
    </script>
</body>
</html>
