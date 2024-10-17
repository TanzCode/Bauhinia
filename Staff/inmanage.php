<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #AA14F0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #AA14F0;
            color: #fff;
        }

        td {
            background-color: #f2f2f2;
        }

        .update-btn, .delete-btn {
            background-color: #AA14F0;
            color: #fff;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
        }

        .search-btn {
            margin-bottom: 10px;
            background-color: #AA14F0;
            color: #fff;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>Inventory Management</h1>

    <!-- Search button -->
    <button class="search-btn" onclick="searchItems()">Search</button>
    <input type="text" name="search">

   

    <table>
        <thead>
            <tr>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Description</th>
                <th>Size</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
    <tr>
        <td>001</td>
        <td>Trendy T-Shirt</td>
        <td>A classic cotton t-shirt with a trendy design. Perfect for casual outings and everyday wear.</td>
        <td>Medium</td>
        <td>Rs 499.99</td>
        <td>50</td>
        <td>
            <button class="update-btn" onclick="updateRow(this)">Update</button><br>
            <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
        </td>
    </tr>
    <!-- Add more rows as needed -->
    <tr>
        <td>002</td>
        <td>Elegant Denim Jeans</td>
        <td>High-quality denim jeans with an elegant fit. Suitable for various occasions, both casual and semi-formal.</td>
        <td>Large</td>
        <td>Rs 1299.99</td>
        <td>30</td>
        <td>
            <button class="update-btn" onclick="updateRow(this)">Update</button>
            <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
        </td>
    </tr>
    <tr>
        <td>003</td>
        <td>Comfy Hoodie</td>
        <td>A comfortable and warm hoodie, perfect for the upcoming winter season. Stylish and cozy.</td>
        <td>Small</td>
        <td>Rs 799.99</td>
        <td>75</td>
        <td>
            <button class="update-btn" onclick="updateRow(this)">Update</button>
            <button class="delete-btn" onclick="deleteRow(this)">Delete</button>
        </td>
    </tr>
</tbody>
        
    </table>

<script>
    function updateRow(button) {
        // Get the selected row
        var row = button.parentNode.parentNode;

        // Get data from the row
        var itemCode = row.cells[0].innerHTML;
        var itemName = row.cells[1].innerHTML;
        var description = row.cells[2].innerHTML;
        var size = row.cells[3].innerHTML;
        var price = row.cells[4].innerHTML;
        var quantity = row.cells[5].innerHTML;

        // Display a message
        alert("Updated item: " + itemName);

        // You can implement further actions here, such as displaying a modal for editing.
    }

    function deleteRow(button) {
        // Get the selected row
        var row = button.parentNode.parentNode;

        // Get data from the row
        var itemName = row.cells[1].innerHTML;

        // Delete the row
        row.parentNode.removeChild(row);

        // Display a message
        alert("Deleted item: " + itemName);
    }

    function searchItems() {
        // You can implement your search functionality here
        alert('Search functionality will be implemented here.');
    }
</script>

</body>

</html>
