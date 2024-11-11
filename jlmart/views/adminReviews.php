<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminReviews.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Reviews and Ratings</title>
</head>
<body>
    <div class="main-container">
        <?php include 'nav-admin.php'; ?>

        <div class ="comment-container">
        <h1 class ="title"> Reviews and Ratings </h1>

        <div class="comments"> 
            <div class="top-comment"> 
                <div class="top-left-comment">
                    <img src="images/user-icon.svg">
                    <div class="name-date">
                        <h2>Your name here</h2>
                        <h3>December 24, 2023</h3>
                    </div>
                </div>
                <div class="top-right-comment">
                    <div class="rate">   
                        Satisfied on Product
                    </div>
                    <div class="heart">
                        <button class="heart-button" onclick="toggleHeart()">&#x2661;</button>
                        <p>2</p>
                    </div>
                <form action="delete_comment.php" method="post" style="display:inline;">
                    <input type="hidden" name="comment_id" value="1">
                    <button type="submit" class="delete-button">
                        <img src="images/trash-icon.svg" alt="Delete">
                    </button>
                </form>
                </div>
            </div>
            <div class="main-comment">
                <p>As a user, I can update my account information, such as my name, email, or password, at any time. As a user, I can update my account information, such as my name, email, or password, at any time.</p>
            </div>
            <div class="comment-input">
                <form action="submit_comment.php" method="post">
                    <textarea id="new-comment" name="comment" placeholder="Write your comment here..."></textarea>
                    <input type="image" src="images/submit-comment.svg" alt="Submit" class="submit-image">
                </form>
            </div>
        </div>


        <div class="comments"> 
            <div class="top-comment"> 
                <div class="top-left-comment">
                    <img src="images/user-icon.svg">
                    <div class="name-date">
                        <h2>Your name here</h2>
                        <h3>December 24, 2023</h3>
                    </div>
                </div>
                <div class="top-right-comment">
                    <div class="rate">   
                        Satisfied on Product
                    </div>
                    <div class="heart">
                        <button class="heart-button" onclick="toggleHeart()">&#x2661;</button>
                        <p>2</p>
                    </div>
                <form action="delete_comment.php" method="post" style="display:inline;">
                    <input type="hidden" name="comment_id" value="1">
                    <button type="submit" class="delete-button">
                        <img src="images/trash-icon.svg" alt="Delete">
                    </button>
                </form>
                </div>
            </div>
            <div class="main-comment">
                <p>As a user, I can update my account information, such as my name, email, or password, at any time. As a user, I can update my account information, such as my name, email, or password, at any time.</p>
            </div>
            <div class="comment-input">
                <form action="submit_comment.php" method="post">
                    <textarea id="new-comment" name="comment" placeholder="Write your comment here..."></textarea>
                    <input type="image" src="images/submit-comment.svg" alt="Submit" class="submit-image">
                </form>
            </div>
        </div>

</div>

    </div>

</body>
</html>
