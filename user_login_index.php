<?php

       session_start();
       
       session_regenerate_id(true);
        if(!isset($_SESSION['UserName']))
            {
                header("location: user_login.php");
            }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

    <style>
        
span
    {
        color: #666666b5;
    }
    .user
        {
            font-size: 20px;
            display: contents;
        }
        .user a
            {
                color: black;
                background-color: #ffee80;
                padding: 5px 15px;
                border-radius: 5px;
                font-weight: 500;
            }
        .user a:hover
            {
                background-color: #f9d806;
            }
    </style>

</head>
<body>

    
<header class="header" style="display: flex; align-items: flex-end; height: 99px;">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> <span>HR</span>wheels&reg; </a>

    <?php

        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true)
            {
                echo "<div class = 'user'>
                            <h2 style ='margin-top: 92px; margin-right: -950px; font-size: 25px;'> <span>Hii</span> &nbsp;$_SESSION[UserName]</h2>
                            <a href = 'index.php' name = 'LogOut' style = 'margin-right: -960px;'>Log Out</a>
                        </div>  
                    ";
            }
        else
            {
                #if password not match
                echo "<script>
                        alert('Incorrect Password');
                        window.location.href = 'user_login.php';
                    </script>";
            }

?>

   

    <div id="login-btn">
    </div>
</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    
            
</div>

<section class="home" id="home">

   

</section>



<section class="featured" id="featured" style="padding: 2rem 9%; margin-top: -45px;">

    <!-- <h1 class="heading"> featured cars </h1> -->

    <div class="swiper featured-slider">

       <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="png/f1.png" alt="">
                <div class="content">
                    <h3>Tata Altroz</h3>
                    
                    <div class="price">₹ 6.29 Lakh</div>
                    <a href="cards/Tata Altroz.html" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/f2.png" alt="">
                <div class="content">
                    <h3>Tata Punch</h3>
                    
                    <div class="price">₹ 5.93 Lakh</div>
                    <a href="cards/Tata Punch.html" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/f3.png" alt="">
                <div class="content">
                    <h3>Maruti Suzuki S-Cross</h3>
                    
                    <div class="price">₹ 8.72 Lakh</div>
                    <a href="cards/Maruti Suzuki S-Cross.html" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/f4.png" alt="">
                <div class="content">
                    <h3>Kia Sonet</h3>
                    
                    <div class="price">₹ 7.15 Lakh</div>
                    <a href="cards/Kia Sonet.html" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/f9.png" alt="">
                <div class="content">
                    <h3>Hyundai Verna</h3>
                    
                    <div class="price">₹ 9.40 Lakh</div>
                    <a href="cards/Hyundai Verna.html" class="btn">check out</a>
                </div>
            </div>

       </div>

       <div class="swiper-pagination"></div>

    </div>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
 
             <div class="swiper-slide box">
                 <img src="png/f5.png" alt="">
                 <div class="content">
                     <h3>Skoda Superb</h3>
                     
                     <div class="price">₹ 32.85 Lakh</div>
                     <a href="cards/Skoda Superb.html" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="png/f6.png" alt="">
                 <div class="content">
                     <h3>MG Hector Plus</h3>
                     
                     <div class="price">₹ 14.65 Lakh</div>
                     <a href="cards/MG Hector Plus.html" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="png/f7.png" alt="">
                 <div class="content">
                     <h3>Jeep Compass</h3>
                     
                     <div class="price">₹ 18.38 Lakh</div>
                     <a href="cards/Jeep Compass.html" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="png/f8.png" alt="">
                 <div class="content">
                     <h3>Hyundai Creta</h3>
                     
                     <div class="price">₹ 10.44 Lakh</div>
                     <a href="cards/Hyundai Creta.html" class="btn">check out</a>
                 </div>
             </div>

             <div class="swiper-slide box">
                 <img src="png/f10.png" alt="">
                 <div class="content">
                     <h3>Toyota Urban Cruiser</h3>
                     
                     <div class="price">₹ 9.02 Lakh</div>
                     <a href="cards/Toyota Urban Cruiser.html" class="btn">check out</a>
                 </div>
             </div>
 
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="script.js"></script>

                    
</body>
</html>