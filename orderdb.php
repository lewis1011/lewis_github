<?php

require("dbconnect.php");

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submitttt'])) {
    $fname = $_POST['buyerName'];
    $categories = $_POST['categories'];
    $crop = $_POST['crop'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $notes = $_POST['notes'];

    // Check if the file was uploaded without errors
    if (isset($_FILES['productimage']) && $_FILES['productimage']['error'] === UPLOAD_ERR_OK) {
        $productimage = $_FILES['productimage'];
        $fileExtension = strtolower(pathinfo($productimage['name'], PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        // Check if the file extension is allowed
        if (in_array($fileExtension, $allowedExtensions)) {
            $image = uniqid("productimage") . "." . $fileExtension;

            // Move the uploaded file to the desired location
            if (move_uploaded_file($productimage['tmp_name'], "images/" . $image)) {
                $sql4 = "INSERT INTO oder(Full_name,Categoties,Name_crops,Quantity,Price,Additional_note,Image) 
                         VALUES ('$fname','$categories','$crop','$quantity','$price','$notes','$image')";
                $result4 = mysqli_query($connect, $sql4);
                if ($result4) {
                    header("location: order.php");
                    exit;
                } else {
                    echo "Error: Failed to insert data into the database.";
                }
            } else {
                echo "Error: Failed to move the uploaded file.";
            }
        } else {
            echo "Error: Invalid file extension. Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "Error: No file was uploaded or an error occurred during the upload.";
    }
}
?>