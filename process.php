<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $buyerName = $_POST['buyerName'];
    $selectedCrop = $_POST['crop'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    // Handle file upload (crop image)
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["cropImage"]["name"]);
    move_uploaded_file($_FILES["cropImage"]["tmp_name"], $targetFile);

    // Insert data into the database (you should modify this based on your database configuration)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agroexchangetrade";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into the 'order' table
    $sql = "INSERT INTO `order` (buyer_name, selected_crop, quantity, price, crop_image_path) VALUES (?, ?, ?, ?, ?)";

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssids", $buyerName, $selectedCrop, $quantity, $price, $targetFile);

    if ($stmt->execute()) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>