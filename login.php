<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signcss.css">
    <title>Login Form</title>
    <script src="validation.js"></script>
</head>
<body>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Add your authentication logic here (check email and password against your database, for example)

    // For simplicity, let's assume a successful login and redirect to the dashboard
    header('Location: p2p.html');
    exit();
}
?>

<form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div class="inputgroup">
        <label for="contact-email">Email</label>
        <input type="text" name="email" id="contact-email" placeholder="Email" onkeyup="validateemail()">
        <span id="email-error"></span>
    </div>

    <div class="inputgroup">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
    </div>

    <button type="submit" onclick="return validatesubmit()">Login</button>
    <span id="submit-error" style="color: red;"></span>
</form>
<div>
<p class="par">Not have an account? <a href="newuser.php"> Sign Up Here</a></p>
</div>
</div>

</body>
</html>
