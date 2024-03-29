<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    
    <link rel="stylesheet" href="orderr.css">
</head>
<body>
    <div class="order-form">
        <h2>Place Your Order</h2>
        <form id="orderForm" action="process.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="buyerName">Buyer Name:</label>
                <input type="text" id="buyerName" name="buyerName" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="crop">Select Crop:</label>
                <select id="crop" name="crop">
                    <option value="crop1">Choose Crops</option>
                    <option value="crop2">Ibishimbo</option>
                    <option value="crop3">Ibirayi</option>
                    <option value="crop4">Ibigori</option>
                    <option value="crop5">Ingano</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="text" id="quantity" name="quantity" placeholder="Enter quantity">
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" placeholder="Enter price">
            </div>
            <div class="form-group">
                <label for="cropImage">Crop Image:</label>
                <input type="file" id="cropImage" name="cropImage" required>
            </div>
            <button type="submit">Place Order</button>
        </form>
    </div>
</body>
</html>