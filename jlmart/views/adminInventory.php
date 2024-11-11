<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminInventory.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <title>Inventory</title>
</head>
<body>
    <div class="main-container">
        <?php include 'nav-admin.php'; ?>

        <div class="topper"> 
            <div class="left">
                <img src="images/inventory-icon.svg">
                <h1>Inventory Management</h1>
            </div>

            <div class="right">
                <form action="inventoryAction.php" method="post">
                    <select name="inventory-options" id="inventory-options">
                        <option value="add">Category</option>
                        <option value="update">Update Item</option>
                        <option value="delete">Delete Item</option>
                    </select>
                    <button type="button" class="add" onclick="openPopup('add')">Add Product +</button>
                </form>
            </div>
        </div>

        <div class="table">
        </div>
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Operation</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Category</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="action-icons">
                        <a href="adminInventory-edit.php">
                            <img src="images/edit-inventory-icon.svg" alt="Edit Icon">
                        </a>
                        <form action="deleteItem.php" method="post" style="display:inline;">
                            <input type="hidden" name="item_id" value="ITEM_ID">
                            <button type="button" style="background:none;border:none;padding:0;" onclick="openPopup('delete')">
                                <img src="images/delete-inventory-icon.svg" alt="Delete Icon">
                            </button>
                        </form>
                    </td>
                    <td class="name-with-icon">
                        <img src="images/inventory-image.svg" alt="Inventory Icon">
                    </td>
                    <td>Category A</td>
                    <td>50</td>
                    <td>$10.00</td>
                    <td>In Stock</td>
                    <td>Edit | Delete</td>
                </tr>
            </tbody>
        </table>

    </div>

    <div id="popup" class="popup" style="display:none;">
        <div id="popup-content" class="popup-content">
            <div id="edit-content">
                <h2>Edit Products</h2>
                <form>
                <label for="name">Product Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Enter product name"><br>

                <label for="price">Price:</label><br>
                <input type="number" id="price" name="price" placeholder="Enter price"><br>

                <label for="description">Description:</label><br>
                <textarea id="description" name="description" placeholder="Enter product description"></textarea><br>

                <label for="stock">Enter Stock:</label><br>
                <input type="number" id="stock" name="stock" placeholder="Enter stock quantity"><br>

                <label for="image" class="custom-file-upload">Choose File</label>
                <input type="file" id="image" name="image" style="display: none;" onchange="updateFileName()">
                <span id="file-name">No file chosen</span>

                <button type="submit" class ="submit-edit">Edit Product</button>

                </form>
            </div>
            <div id="delete-content">
                <h2>Delete Item</h2>
                <p>Are you sure you want to delete this item?</p>
                <button type="button" onclick="confirmDelete()">Yes</button>
                <button type="button" onclick="closePopup()">No</button>
            </div>
            <div id="add-content">
                <h2>Add Product</h2>
                <form>
                <label for="name">Product Name:</label><br>
                <input type="text" id="name" name="name" placeholder="Enter product name"><br>

                <label for="price">Price:</label><br>
                <input type="number" id="price" name="price" placeholder="Enter price"><br>

                <label for="description">Description:</label><br>
                <textarea id="description" name="description" placeholder="Enter product description"></textarea><br>

                <label for="stock">Enter Stock:</label><br>
                <input type="number" id="stock" name="stock" placeholder="Enter stock quantity"><br>

                <label for="image" class="custom-file-upload">Choose File</label>
                <input type="file" id="image" name="image" style="display: none;" onchange="updateFileName()">
                <span id="file-name">No file chosen</span>

                <button type="submit" class ="submit-edit">Edit Product</button>

                </form>

            </div>
        </div>
    </div>

</body>
    <script>
        function openPopup(action) {
            document.getElementById('popup').style.display = 'flex';
            ['edit', 'delete', 'add'].forEach(id => {
                document.getElementById(id + '-content').style.display = (id === action) ? 'block' : 'none';
            });
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }

        function confirmDelete() {
            alert("Item deleted!");
            closePopup();
        }

        function updateFileName() {
            var input = document.getElementById('image');
            document.getElementById('file-name').textContent = input.files[0] ? input.files[0].name : 'No file chosen';
        }
    </script>
</html>
