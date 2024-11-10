<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/userRegisterStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <div class = "main-container">
    <div class = "right">
        <h1 class = sign-up> CREATE AN ACCOUNT </h1>
        <p class = "sign-up-message">Create an account to access exclusive features and track your orders</p>
        <form method="POST">
            <label for="name">Name: </label><br>
            <input type="text" id="name" name="name" placeholder ="Enter your name here" required><br><br>
            <label for="email">Email</label><br>
            <input type="text" id="email" name="email" placeholder ="Enter your email here" required><br><br>
            <label for="password">Password:</label><br>
            <input type="text" id="password" name="password" placeholder ="Enter your password here" required><br><br>
            <button type="submit">Sign Up</button>
        </form>
    </div>

    <div class = "left">
        <div class ="top-part"> 
            <img src="../images/logo.svg" class="logo">
            <h2> JL Mart Asian Foods</h2>
        </div>
        <h1 class = "title-message"> Welcome Back! </h1>
        <h3 class = "message"> To keep connected with us please register with your personal info</h3>
        <p class = "question"> Have an account?</p> <br>
        <div class = "button-container">
        <button onclick="window.location.href='userLogin.php'" class="sign-in">Sign In</button>
        </div>
    </div>
</div>
</body>
</html>
