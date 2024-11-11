<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminDashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Admin Dash</title>
</head>
<body>
    <div class="main-container">
    <?php include 'nav-admin.php'; ?>

    <h1 class ="title"> 
        Edit Homepage
    </h1>
    <div class = "banner"> 
        <div class = "left">
            <div class = "banner-text"> 
            <form method="post" action="processSale.php">
                <input type="text" id="sale-title" name="sale-title" value="Enter Title Here" required>
                <input type="text" id="description" name="description" value="Enter Description Here" required>
            <button type ="submit" class = "banner-btn">Save and Upload </button>
            </div>
            <div class="banner-img">
                <input type="file" id="banner-img" name="banner-img" accept="image/*" required>
            </div>
            </form>
        </div>

        <div class = "right">
            <div class = "top-right">
                <label for="discount">Enjoy up to:</label>
                <input type="number" id="discount" name="discount" value="30" min="0" max="100" required>
                <span>% OFF Product Discount</span>
            </div>
            <div class = "down-right">
            <div class="down-right-text">
                <p>
                    Don't miss out! <a href="#">Log in</a> to access our other exclusive deals!
                </p>
            </div>
            </div>
        </div>
    </div>

    <div class = "category"> 
        <h1> Explore popular products </h1>
        <img src = "images/category-homepage.svg">
    </div>

    <div class="category-container">
        <div class="category-card">
            <form method="post" action="uploadImage.php" enctype="multipart/form-data">
                <label for="category-image" class="upload-label">Upload Image</label>
                <input type="file" id="category-image" name="category-image" accept="image/*" required style="display: none;">
                <input type="text" id="category1" name="category1" value="Enter Title Here" required>
                <button type="submit" class = "upload">Save</button>
            </form>
        </div>

        <div class="category-card2">
            <form method="post" action="uploadImage.php" enctype="multipart/form-data">
                <label for="category-image2" class="upload-label">Upload Image</label>
                <input type="file" id="category-image2" name="category-image2" accept="image/*" required style="display: none;">
                <input type="text" id="category2" name="category2" value="Enter Title Here" required>
                <button type="submit" class = "upload">Save</button>
            </form>
        </div>

        <div class="category-card">
            <form method="post" action="uploadImage.php" enctype="multipart/form-data">
                <label for="category-image3" class="upload-label">Upload Image</label>
                <input type="file" id="category-image3" name="category-image3" accept="image/*" required style="display: none;">
                <input type="text" id="category3" name="category3" value="Enter Title Here" required>
                <button type="submit" class = "upload">Save</button>
            </form>
        </div>
    </div>

    <div class ="orders">
    <h1 class ="title"> 
        Orders
    </h1>
    <select id="card-category" name="card-category" class="category-select">
                    <option value="all">All Orders</option>
                    <option value="new">New Orders</option>
                    <option value="in-progress">In Progress</option>
                    <option value="completed">Completed</option>
                    <option value="cancelled">Cancelled</option>
   </select>
    </div>

    <div class = "card-container"> 
        <div class="card">
            <div class="card-header">
                <label for="status" class="status-label">Status:</label>
                <select id="status" name="status" class="status-select">
                    <option value="pending">Pending</option>
                    <option value="processing">Processing</option>
                    <option value="shipped">Shipped</option>
                    <option value="delivered">Delivered</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
            <div class="card-body">
                <p><strong>Customer Name:</strong> John Doe</p>
                <p><strong>Total Price:</strong> $123.45</p>
                <p><strong>Items with Quantity:</strong></p>
                <ul>
                    <li>Item 1 - Quantity: 2</li>
                    <li>Item 2 - Quantity: 1</li>
                    <li>Item 3 - Quantity: 5</li>
                </ul>
                <p><strong>Status:</strong> Shipped</p>
                <p><strong>Shipping Address:</strong> 123 Main St, Anytown USA</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <label for="status" class="status-label">Status:</label>
                <select id="status" name="status" class="status-select">
                    <option value="pending">Pending</option>
                    <option value="processing">Processing</option>
                    <option value="shipped">Shipped</option>
                    <option value="delivered">Delivered</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
            <div class="card-body">
                <p><strong>Customer Name:</strong> John Doe</p>
                <p><strong>Total Price:</strong> $123.45</p>
                <p><strong>Items with Quantity:</strong></p>
                <ul>
                    <li>Item 1 - Quantity: 2</li>
                    <li>Item 2 - Quantity: 1</li>
                    <li>Item 3 - Quantity: 5</li>
                </ul>
                <p><strong>Status:</strong> Shipped</p>
                <p><strong>Shipping Address:</strong> 123 Main St, Anytown, USA</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <label for="status" class="status-label">Status:</label>
                <select id="status" name="status" class="status-select">
                    <option value="pending">Pending</option>
                    <option value="processing">Processing</option>
                    <option value="shipped">Shipped</option>
                    <option value="delivered">Delivered</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
            <div class="card-body">
                <p><strong>Customer Name:</strong> John Doe</p>
                <p><strong>Total Price:</strong> $123.45</p>
                <p><strong>Items with Quantity:</strong></p>
                <ul>
                    <li>Item 1 - Quantity: 2</li>
                    <li>Item 2 - Quantity: 1</li>
                    <li>Item 3 - Quantity: 5</li>
                </ul>
                <p><strong>Status:</strong> Shipped</p>
                <p><strong>Shipping Address:</strong> 123 Main St, Anytown, USA</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <label for="status" class="status-label">Status:</label>
                <select id="status" name="status" class="status-select">
                    <option value="pending">Pending</option>
                    <option value="processing">Processing</option>
                    <option value="shipped">Shipped</option>
                    <option value="delivered">Delivered</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
            <div class="card-body">
                <p><strong>Customer Name:</strong> John Doe</p>
                <p><strong>Total Price:</strong> $123.45</p>
                <p><strong>Items with Quantity:</strong></p>
                <ul>
                    <li>Item 1 - Quantity: 2</li>
                    <li>Item 2 - Quantity: 1</li>
                    <li>Item 3 - Quantity: 5</li>
                </ul>
                <p><strong>Status:</strong> Shipped</p>
                <p><strong>Shipping Address:</strong> 123 Main St, Anytown, USA</p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <label for="status" class="status-label">Status:</label>
                <select id="status" name="status" class="status-select">
                    <option value="pending">Pending</option>
                    <option value="processing">Processing</option>
                    <option value="shipped">Shipped</option>
                    <option value="delivered">Delivered</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>
            <div class="card-body">
                <p><strong>Customer Name:</strong> John Doe</p>
                <p><strong>Total Price:</strong> $123.45</p>
                <p><strong>Items with Quantity:</strong></p>
                <ul>
                    <li>Item 1 - Quantity: 2</li>
                    <li>Item 2 - Quantity: 1</li>
                    <li>Item 3 - Quantity: 5</li>
                </ul>
                <p><strong>Status:</strong> Shipped</p>
                <p><strong>Shipping Address:</strong> 123 Main St, Anytown, USA</p>
            </div>
        </div>


</div>
    
    </div>

    <script>
        document.querySelectorAll('.upload-label').forEach(label => {
            const input = label.nextElementSibling;
            label.addEventListener('click', () => input.click());
            input.addEventListener('change', () => {
                if (input.files.length > 0) {
                    label.textContent = input.files[0].name;
                }
            });
        });

        document.getElementById('sale-title').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                document.querySelector('form').submit();
            }
        });

        document.getElementById('description').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                document.querySelector('form').submit();
            }
        });

        document.getElementById('discount').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                document.querySelector('form').submit();
            }
        });
    </script>
</body>
</html>
