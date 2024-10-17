<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reportID = $_POST['reportID'];
    $itemCode = $_POST['itemCode'];
    $quantity = $_POST['quantity'];
    $amount = $_POST['amount'];
    $reportDate = date('Y-m-d');

    $sql = "INSERT INTO daily_order_reports (report_id, item_code, quantity, amount, report_date) 
            VALUES ('$reportID', '$itemCode', '$quantity', '$amount', '$reportDate')";

    if ($conn->query($sql) === TRUE) {
        echo "Daily Order Report generated and saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
