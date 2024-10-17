<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
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

        .update-btn {
            background-color: #AA14F0;
            color: #fff;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>Order Details</h1>

    <?php
    // Sample data (you can replace this with actual data from your database)
    $orderData = [
        ['O001', 'C001', 'Rs, 4590', 'Delivered', 'Paid', 'Yes'],
        ['O002', 'C002', 'Rs 10,460', 'In Progress', 'Pending', 'No'],
        ['O003', 'C003', 'Rs 8,920', 'Shipped', 'Paid', 'Yes'],
        
    ];
    ?>

    <table>
        <thead>
            <tr>
                <th>Order_ID</th>
                <th>customerID</th>
                <th>Amount</th>
                <th>Delivery status</th>
                <th>Payment status</th>
                <th>Completed or not</th>
                <th>Action</th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach ($orderData as $order): ?>
                <tr>
                    <?php foreach ($order as $index => $value): ?>
                        <td><?php echo $value; ?></td>
                        <?php if ($index === 5): ?> 
                            <td><button class="update-btn" onclick="updateRow(this)">Update</button></td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script>
        function updateRow(button) {
            // Get the selected row
            var row = button.parentNode.parentNode;

            // Extract data from the row
            var orderID = row.cells[0].innerHTML;
            var customerID = row.cells[1].innerHTML;
            var amount = row.cells[2].innerHTML;
            var deliveryStatus = row.cells[3].innerHTML;
            var paymentStatus = row.cells[4].innerHTML;
            var completedStatus = row.cells[5].innerHTML;

            
        }
    </script>

</body>

</html>
