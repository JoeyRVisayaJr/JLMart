<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/accountSetting.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Account Settings</title>
</head>
<body>
    <div class = "main-container">
    <?php include 'nav.php'; ?>
    
    <div class = "banner"> 
        <img src = "../images/acc-setting-logo.svg">
        <h1>Account Settings </h1>
    </div>

    <div class = "edit-profile">
        <button class ="edit"> Edit Profile </button>
        <h2><a href="#personal-address">Personal Address</a></h2> 
        <h2><a href="#contact-number">Contact Number</a></h2> 
    </div>

    <div class ="setting-form">
        <div class ="left">
            <img src ="../images/acc-icon-setting.svg">
        </div>

        <div class ="right">
            <form method="POST" action="processAccountSettings.php">
                <div class ="first-row">
                    <div>
                        <label for="username">User Name:</label><br>
                        <input type="text" id="username" name="username" placeholder ="Enter your username here" required><br><br>
                    </div>
                    <div>
                        <label for="password">Password:</label><br>
                        <input type="text" id="password" name="password" placeholder ="Enter your password here" required><br><br>
                    </div>
                </div>

                <div class = "second-row">
                        <label for="email">Email Address:</label><br>
                        <input type="email" id="email" name="email" placeholder ="Enter your email here" required><br><br>
                </div>
                
                <h2 id="personal-address" class ="title-form"> Personal Address </h2> 

                <div class ="first-row">
                    <div>
                        <label for="country">Country :</label><br>
                        <input type="text" id="country" name="country" placeholder ="Enter your country here" required><br><br>
                    </div>
                    <div>
                        <label for="city">City:</label><br>
                        <input type="text" id="city" name="city" placeholder ="Enter your city here" required><br><br>
                    </div>
                </div>

                <div class = "second-row">
                        <label for="address">Complete Address: </label><br>
                        <input type="text" id="address" name="address" placeholder ="Enter your complete address here" required><br><br>
                </div>
                
                <div class ="first-row">
                    <div>
                        <label for="zipcode">Zip Code: </label><br>
                        <input type="number" id="zipcode" name="zipcode" placeholder ="Enter your zip code here" required><br><br>
                    </div>
                    <div>
                        <label for="landmark">Landmark: </label><br>
                        <input type="text" id="landmark" name="landmark" placeholder ="Enter your landmark here" required><br><br>
                    </div>
                </div>

                <h2 id="contact-number" class ="title-form"> Contact Number </h2> 

                <div class = "second-row">
                        <label for="contact">Contact Number: </label><br>
                        <input type="number" id="contact" name="contact" placeholder ="Enter your contact number here" required><br><br>
                </div>

                <button type="submit" class= "submit" >Save Changes</button>
            </form>
        </div>
    </div>

    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
