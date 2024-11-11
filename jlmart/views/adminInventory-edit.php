<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminInventory-edit.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <title>Inventory</title>
</head>
<body>
    <div class="main-container">
        <?php include 'nav-admin.php'; ?>

            <div id="edit-content">
                <div class = "topper">
                <h2>Edit Products</h2>
                <button id="back" onclick="history.back()"> <  Turn back </button>
                </div>
                <form>
                <div class ="row">
                <div>
                <label for="name">Product Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Enter product name">
                </div>

                <div>
                <label for="price">Price:</label><br>
                <input type="number" id="price" name="price" placeholder="Enter price">
                </div>
                </div> 

                <div class="row">
                    <div>
                        <label for="description">Description:</label><br>
                        <textarea id="description" name="description" placeholder="Enter product description"></textarea>
                    </div>
                    <div>
                        <label for="stock">Enter Stock:</label><br>
                        <input type="number" id="stock" name="stock" placeholder="Enter stock quantity">
                    </div>
                </div> 

                <div class="row">
                    <div>
                        <label for="image" class="custom-file-upload">Choose File</label>
                        <input type="file" id="image" name="image" style="display: none;" onchange="updateFileName()">
                        <span id="file-name">No file chosen</span>
                    </div>
                    <div>
                        <button type="submit" class="submit-edit">Edit Product</button>
                    </div>
                </div>
            </div>

    </div>

</body>
</html>
