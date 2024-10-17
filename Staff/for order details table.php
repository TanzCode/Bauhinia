<?php
// Establish a connection to your MySQL database
$servername = "your_database_server";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sample data (you can replace this with actual data from your database)
$orderData = [
    ['Order001', 'Customer001', '$100', 'Delivered', 'Paid', 'Yes'],
    ['Order002', 'Customer002', '$150', 'In Progress', 'Pending', 'No'],
    ['Order003', 'Customer003', '$80', 'Shipped', 'Paid', 'Yes'],
    // Add more rows as needed
];

// Process update if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $orderID = $_POST["orderID"];
    $cusID = $_POST["cusID"];
    $amount = $_POST["amount"];
        $DeliveryStatus = $_POST["DeliveryStatus"];
        $paymentStatus = $_POST["paymentStatus"];
         $CompleteStatus = $_POST["CompleteStatus"];



    // Perform the actual database update operation
    $sql = "UPDATE Orderdetails SET itemCode='$itemCode', quantity='$quantity', amount='$amount' WHERE reportID='$reportID'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

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

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="reportID">Report ID:</label>
        <input type="text" id="reportID" name="reportID" required>

        <label for="itemCode">Item Code:</label>
        <input type="text" id="itemCode" name="itemCode" required>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required>

        <label for="amount">Amount:</label>
        <input type="text" id="amount" name="amount" required>

        <button type="submit">Update Report</button>
    </form>

    <table>
        <!-- Display your data in the table as before -->
    </table>

    <script>
        // Your existing JavaScript code
    </script>

</body>

</html>
