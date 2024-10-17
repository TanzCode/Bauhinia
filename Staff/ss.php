<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <style>
        /* Your existing CSS styles */
    </style>
</head>

<body>

    <h1>Order Details</h1>

    <?php 
include 'config.php';


  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $orderID = $_POST["orderID"];
        $deliveryStatus = $_POST["deliveryStatus"];
        $paymentStatus = $_POST["paymentStatus"];
        $completedStatus = $_POST["completedStatus"];

       
        $sql = "UPDATE OrderStatus SET deliveryStatus='$deliveryStatus', paymentStatus='$paymentStatus', completedStatus='$completedStatus' WHERE orderID='$orderID'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    $conn->close();
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
                            <td>
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <input type="hidden" name="orderID" value="<?php echo $order[0]; ?>">
                                    <label for="deliveryStatus">Delivery Status:</label>
                                    <input type="text" id="deliveryStatus" name="deliveryStatus" value="<?php echo $order[3]; ?>">
                                    <label for="paymentStatus">Payment Status:</label>
                                    <input type="text" id="paymentStatus" name="paymentStatus" value="<?php echo $order[4]; ?>">
                                    <label for="completedStatus">Completed Status:</label>
                                    <input type="text" id="completedStatus" name="completedStatus" value="<?php echo $order[5]; ?>">
                                    <button type="submit">Update</button>
                                </form>
                            </td>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>
