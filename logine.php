<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signcss.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
<section id="header">
    
    <div class="headprofile" style="float: right;">
    <ul id="homeiconbtn">
      
                <li><a class="active" href="homepage.html">|Home|</a></li></ul>

            </div>
</section>


    <?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Add your authentication logic here (check email and password against your database, for example)

    // For simplicity, let's assume a successful login and redirect to the dashboard
    header('Location: orderr.html');
    exit();
}
?>
    <div class="loginbox">
    <!-- <div class=" backhead"><i class="fa-solid fa-arrow-left"></i></div> -->


    <h1> Welcome to Agriexchangecrops</h2>
    <h3> LOGIN</h3>
    
    <form id="registration"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> 
        <div class="inputgroup">
    <label for=""> Email </label>
    <input type="text" name="email" placeholder="First name" id="contact-email" onkeyup="validateemail()">
    <span id = "email-error"></span>
</div>

<div>
    <label for=""> Password</label>

    <input type="text" name="password" placeholder="Password" class="name">
</div>
    <button onclick = " return validatesubmittt()">Login </button>
    <span id="submit-error" style="color: red;"> </span>
</form> 
<div>
<p class="par">Not have an account? <a href="newuser.php"> Sign Up Here</a></p>
</div>
</div>
<script src="form.js" ></script>
</body>
</html>