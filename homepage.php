<?php  
session_start();
$message = $_SESSION['message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="p2p.css">
    <!-- <link rel="stylesheet" href="dashboard.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Document</title>
</head>
<body style="background-color: white;">
    <section id="header">
    
        <div class="headprofile" style="float: right;">
            <a class="headprofilebtn" href="dashboard30.html"><i class="fa-regular fa-user"></i></a>
        <!-- <div class="headprofilecontent">
            <a href="">email or user name account</a>
            <a href=""> Account And Security</a>
            <a href="">Asset</a>

            <a href="">Notification</a>

            <a href="">Logout</a>
        </div> -->
        
        </div>
        <div class="homeicon">
     <div class="pop"  id="pop" >  
           <?php
           if(isset($_SESSION['message'])){
             echo $_SESSION['message'] ;
           }
      
        ?>
        </div>  
            <ul id="homeiconbtn">
      
                <li><a class="active" href="home32.html">|Home|</a></li>
                <!-- <li><a href="asset30.html">|Asset|</a></li> -->
                <li><a href="p2p.html">|P2P|</a></li>
                <li><a href="announcement1.html">|Announcement|</a></li>
                <li><a href="news1.html">|News|</a></li>
                <a href="" id="close">
                    <i class="fa-solid fa-xmark"></i>
                </a>
            </ul>
            
        </div>
        <div id="menubar">
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
        
    </section>
     
    <section>
        <div class="marquehead"> <marquee behavior="" direction="right" style="padding-top: 30px;">
             Welcome To AgroExchangeCrops  </marquee></div>
        <!-- <marquee behavior="" direction="rigtht"> -->
            <div class="photohead">
                <div class="photohead1"> <img src="amasakaA.jpg" alt=""></div>
                <div class="photohead1"> <img src="ibigoriA.jpg" alt=""></div>
                <div class="photohead1"> <img src="ibishyimbo1.jpg" alt=""></div>
                <div class="photohead1"> <img src="ibirayiA.jpg" alt=""></div>
                <div class="photohead1"> <img src="karotiA.jpg" alt=""></div>
               <div class="photohead1"> <img src="amasakaA.jpg" alt=""></div>
               <div class="photohead1"> <img src="ingano.jpg" alt=""></div>
            </div>
        <!-- </marquee> -->
    </section>
    <!-- <section id="bodyhome">
        <div class="bodyhomebtn">
            <h2 ><i>Welcome to AgroExchangeCrops where agricultural trade thrives!</i></h2>
            <p>Welcome to AgritradeConnect, your premier online platform for buying and selling</p>
            <p>Our mission is to revolutionize agricultural trade by connecting farmers and buyers directly,
                eliminating intermediaries, and fostering transparent and fair transactions.</p>
                <p>At AgritradeConnect, farmers can list their crops with detailed descriptions, and buyers
                    can discover a wide range of products and negotiate competitive prices. We prioritize
                    data security to ensure a safe trading environment, and your privacy is of most
                    importance to us.</p>
                    <button id="joinnow"><a href="newuser.html">Join Now</a></button>
        </div>
       
    </section > -->
    <section id="features">
    <div class="featurebtn">
        <div class="fe-box">
            <img src="online order.png" alt="Online oder">
            <h4>Online Order</h4>
        </div>
        <div class="fe-box">
            <img src="online shipping.png" alt="Online oder">
            <h4>Online Shipping</h4>
        </div>
        <div class="fe-box">
            <img src="happy sell.png" alt="Online oder">
            <h4>Happy Sell</h4>
        </div>
        <div class="fe-box">
            <img src="save money.png" alt="Online oder">
            <h4>Save Money</h4>
        </div>
        <div class="fe-box">
            <img src="support24.png" alt="Online oder">
            <h4>Support 24/7</h4>
        </div>
    </div>
    <section id="product">
        <div>
            <h1 style="color: black; text-align: center;
            font-size: 40px;
            font-family: Verdana, Geneva, Tahoma, sans-serif; text-decoration:underline ;">Features of Product On Agroexhangetrade
            </h1></div>
    <section id="p2psection">
<div class="p2plevel1">
    <div class="p2plevel1content">
        <div class="p2pimage">
        <img src="ibirayi.jpg" alt="ibigori " width="200px" height="200px">
        <p>The high quality of Irish Potatoes form Nyabihu and Cheap price </p>
        <h3> 400 Rwf/Kg</h3>
        <p>10 Tons(Quantity)</p>
        <button class="p2pbutton">Contact supplier</button>
    </div>

    </div>
    <div class="p2plevel1content">
        <div class="p2pimage">
        <img src="ibigori.jpg" alt="ibigori " width="200px" height="200px">
        <p>The high quality of maize form Nyagatare and Cheap price </p>
        <h3> 500 Rwf/Kg</h3>
        <p>10 Tons(Quantity)</p>
        <button class="p2pbutton">Contact supplier</button>
    </div>

    </div>
    <div class="p2plevel1content">
        <div class="p2pimage">
        <img src="ibigori.jpg" alt="ibigori " width="200px" height="200px">
        <p>The high quality of maize form Nyagatare and Cheap price </p>
        <h3> 500 Rwf/Kg</h3>
        <p>10 Tons(Quantity)</p>
        <button class="p2pbutton">Contact supplier</button>

      </div>

    </div>
    <div class="p2plevel1content">
        <div class="p2pimage">
        <img src="ibigori.jpg" alt="ibigori " width="200px" height="200px">
        <p>The high quality of maize form Nyagatare and Cheap price </p>
        <h3> 500 Rwf/Kg</h3>
        <p>10 Tons(Quantity)</p>
        <button class="p2pbutton">Contact supplier</button>
       </div>

    </div>
</div>
</section> <div>

<section id="p2psection"> 
   
    <div class="p2plevel1">
        <div class="p2plevel1content">
            <div class="p2pimage">
            <img src="ibigori.jpg" alt="ibigori " width="200px" height="200px">
            <p>The high quality of maize  form Nyagatare and Cheap price </p>
            <h3> 500 Rwf/Kg</h3>
            <p>10 Tons(Quantity)</p>
            <button class="p2pbutton">Contact supplier</button>
        </div>
    
        </div>
        <div class="p2plevel1content">
            <div class="p2pimage">
            <img src="ibigori.jpg" alt="ibigori " width="200px" height="200px">
            <p>The high quality of maize form Nyagatare and Cheap price </p>
            <h3> 500 Rwf/Kg</h3>
            <p>10 Tons(Quantity)</p>
            <button class="p2pbutton">Contact supplier</button>
        </div>
    
        </div>
        <div class="p2plevel1content">
            <div class="p2pimage">
            <img src="ibigori.jpg" alt="ibigori " width="200px" height="200px">
            <p>The high quality of maize form Nyagatare and Cheap price </p>
            <h3> 500 Rwf/Kg</h3>
            <p>10 Tons(Quantity)</p>
            <button class="p2pbutton">Contact supplier</button>
    
          </div>
    
        </div>
        <div class="p2plevel1content">
            <div class="p2pimage">
            <img src="ibigori.jpg" alt="ibigori " width="200px" height="200px">
            <p>The high quality of maize form Nyagatare and Cheap price </p>
            <h3> 500 Rwf/Kg</h3>
            <p>10 Tons(Quantity)</p>
            <button class="p2pbutton">Contact supplier</button>
           </div>
    
        </div>
    </div>
    
    </section>
    <section id="footer">
<div class="footerbtn">
    <div class="customerservices" >
    <h3>customer services</h3>
    <p>Helper center</p>
    <p>Report abuse</p>
    <p>Open a case</p>
    <p>Police&rules</p>  
    </div>
    <div class="aboutsevices">
    <h3>About us</h3>
    <p>About Agroexchangecrops.com</p>
    <p>About Agroexchangecrops group</p> 
    <p>Agroexchangecrops blog</p>
    <p>Legal notice</p>
     </div>
     <div class="buyonagroexchange">
    <h3>Buyer on Agroexchangecrops.com</h3>
    <p>Buyer membership</p>
    <p></p>parter programp </p>
    </div>
    <div class="sellonagro">
        <h3>Sell on Agroexchangecrops.com</h3><br>
        <p> Seller membership</p><br>
        <p>Partern program</p><br>  
    </div>
    <div class="tradeonp2p" style="padding-left: 10px;">
        <h3>trade services on P2P</h3>
        <p>Trade insurance</p>
        <p>Business identity</p>
        <p>logistic services</p>
     </div></div>
     <div class="suppoterdwn">
        <div>
            <h4>Download app:</h4>

        </div>
        <div> <h4> Agroexchangecrops.com</h4></div>
        <div> <h4>Email:lewisng@gmail.com <i class="fa-solid fa-envelope"></i> </h4></div>
        <div> <h4><h4>Follow us:<i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-facebook"></i> </h4></h4></div>


     </div>
     <div class="copyright">
        <div> Term of services|Privacy policy</div>
        <div style="padding-top: 30px;">copy right Rendez-Vous <span >2023</span></div>
        
     </div>


    </section>
    <script>
var pop=document.getElementById("pop");
setTimeout(() =>{
    pop.style.display="none";
},8000);
    </script>
    <script src="form.js"></script>
</body>
</html>