<?php
include 'config.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reportID = $_POST['reportID'];
    $month = $_POST['month'];
    $receiptID = $_POST['receiptID'];
    $amount = $_POST['amount'];
    $reportDate = date('Y-m-d');

    $sql = "INSERT INTO monthly_income_reports (report_id, month, receipt_id, amount, report_date) VALUES ('$reportID', '$month', '$receiptID', '$amount', '$reportDate')";

    if ($conn->query($sql) === TRUE) {
        echo "Monthly Income Report generated and saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
