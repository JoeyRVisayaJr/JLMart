<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Products</title>
</head>
<body>
<div class = "main-container">
<?php include 'nav.php'; ?>
    <div class="topper">
        <h1> My Cart </h1>
        <button onclick="window.location.href='products.php'" class="btn">< Continue Shopping</button>
    </div>
 
    <form action="checkout.php" method="post">
        <table class="styled-table">
            <thead>
                <tr>
                    <th></th>
                    <th>PRODUCT</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>TOTAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" name="select[]" id="select" value="1"></td>
                    <td>
                        <div class="product">
                            <div class="left-product">
                                <img src="images/cart-product.svg" alt="Samyang">
                            </div>
                            <div class="right-product">
                                <h3>Samyang / Buldak</h3>
                                <p>Food</p>
                            </div>
                        </div>
                    </td>
                    <td><b>PHP400</b></td>
                    <td class="addcart">
                        <div class="quantity-wrapper">
                            <button class="minus-btn" type="button" onclick="updateQuantity(-1)">-</button>
                            <input type="number" name="quantity[]" id="quantity" value="1" min="1">
                            <button class="plus-btn" type="button" onclick="updateQuantity(1)">+</button>
                        </div>
                    </td>
                    <td><b>PHP400</b></td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="select[]" id="select" value="2"></td>
                    <td>
                        <div class="product">
                            <div class="left-product">
                                <img src="images/cart-product.svg" alt="Samyang">
                            </div>
                            <div class="right-product">
                                <h3>Samyang / Buldak</h3>
                                <p>Food</p>
                            </div>
                        </div>
                    </td>
                    <td><b>PHP400</b></td>
                    <td class="addcart">
                        <div class="quantity-wrapper">
                            <button class="minus-btn" type="button" onclick="updateQuantity(-1)">-</button>
                            <input type="number" name="quantity[]" id="quantity" value="1" min="1">
                            <button class="plus-btn" type="button" onclick="updateQuantity(1)">+</button>
                        </div>
                    </td>
                    <td><b>PHP400</b></td>
                </tr>
            </tbody>
        </table>
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
        <div class="checkout">
            <button type="submit" class="checkout-btn">Checkout</button>
        </div>
    </form>


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