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

</head>
<body>
    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo" style="font-size: 3.5rem; margin-left: -50px;"> <span>HR</span>wheels&reg; </a>

    <nav class="navbar">
        <a href="#home" style="font-size: 20px;">home</a>
        <a href="#vehicles" style="font-size: 20px;">vehicles</a>
        <a href="#services" style="font-size: 20px;">services</a>
        <a href="#featured" style="font-size: 20px;">featured</a>
        <a href="#reviews" style="font-size: 20px;">reviews</a>
        <a href="#contact" style="font-size: 20px;">contact</a>
    </nav>

    <div id="login-btn">
    
        <a href="user_login.php">
            <button class="btn" style="margin-right: -173px; margin-left: 50px;">User Login</button>
        </a>
        <i class="far fa-user"></i>
    </div>

    <div id="login-btn">
    
        <a href="admin_login/admin_form.php"><button class="btn" style="margin-right: -110px;">Admin Login</button></a>
        <i class="far fa-user"></i>
    </div>
</header> 
    
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="user_login.php" method="POST">
        <h3>user login</h3>

        <input type="email" placeholder="email" class="box">
        <input type="password" placeholder="password" class="box">
        <p> forget your password <a href="for.php">click here</a> </p>
        <input type="submit" value="login" class="btn">
        <p>or login with</p>
        <div class="buttons">
            <a href="#" class="btn"> google </a>
            <a href="#" class="btn"> facebook </a>
        </div>
        <p> don't have an account <a href="registration.php">create one</a> </p>
    </form>
            
</div>

<section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">find your car</h3>

    <img data-speed="5" class="home-parallax" src="png/home-img.png" alt="">

    <a data-speed="7" href="#vehicles" class="btn home-parallax">explore cars</a>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>150+</h3>
            <p>branches</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>4770+</h3>
            <p>cars sold</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>2200+</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>1500+</h3>
            <p>news cars</p>
        </div>
    </div>

</section>

<section class="vehicles" id="vehicles">

    <h1 class="heading"> popular vehicles </h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="png/p1.png" alt="">
                <div class="content">
                    <h3>Tata Harrier</h3>
                    <div class="price"> <span>price : </span> ₹ 14.69 Lakh </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 5 Seater
                        <span class="fas fa-circle"></span> Manual & Automatic (TC)
                        <span class="fas fa-circle"></span> Diesel
                        <span class="fas fa-circle"></span> 138-168 bhp
                        <span class="fas fa-circle"></span> 1956 cc
                    </p>
                    <a href="#featured" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/p2.png" alt="">
                <div class="content">
                    <h3>Tata Safari</h3>
                    <div class="price"> <span>price : </span> ₹ 15.35 Lakh </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 6 & 7 Seater
                        <span class="fas fa-circle"></span> Manual & Automatic (TC)
                        <span class="fas fa-circle"></span> Diesel
                        <span class="fas fa-circle"></span> 168 bhp
                        <span class="fas fa-circle"></span> 1956 cc
                    </p>
                    <a href="#featured" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/p3.png" alt="">
                <div class="content">
                    <h3>Tata Nexon EV Max</h3>
                    <div class="price"> <span>price : </span> ₹ 18.34 Lakh </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 5 Seater
                        <span class="fas fa-circle"></span> Electric
                        <span class="fas fa-circle"></span> Battery Capacity: 40.5 kWh
                        <span class="fas fa-circle"></span> Driving Range: 437 km
                    </p>
                    <a href="#featured" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/p4.png" alt="">
                <div class="content">
                    <h3>Mercedes-Benz GLA</h3>
                    <div class="price"> <span>price : </span> ₹ 44.90 Lakh </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 5 Seater    
                        <span class="fas fa-circle"></span> Manual & Automatic (TC)  
                        <span class="fas fa-circle"></span> Petrol & Diesel
                        <span class="fas fa-circle"></span> 161-188 bhp
                        <span class="fas fa-circle"></span> 1332 to 1950 cc
                    </p>
                    <a href="#featured" class="btn">check out</a>
                </div>  
            </div>

            <div class="swiper-slide box">
                <img src="png/p5.png" alt="">
                <div class="content">
                    <h3>Mahindra Thar</h3>
                    <div class="price"> <span>price : </span> ₹ 13.53 Lakh </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 4 Seater
                        <span class="fas fa-circle"></span> Manual & Automatic (TC)
                        <span class="fas fa-circle"></span> Petrol & Diesel
                        <span class="fas fa-circle"></span> 130-150 bhp
                        <span class="fas fa-circle"></span> 1997 to 2184 cc
                    </p>
                    <a href="#featured" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/p6.png" alt="">
                <div class="content">
                    <h3>BMW Z4</h3>
                    <div class="price"> <span>price : </span> ₹ 71.82 Lakh </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 2 Seater
                        <span class="fas fa-circle"></span> Manual & Automatic (TC)
                        <span class="fas fa-circle"></span> Petrol
                        <span class="fas fa-circle"></span> 194-375 bhp
                        <span class="fas fa-circle"></span> 1998 to 2998 cc
                    </p>
                    <a href="#featured" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/p7.png" alt="">
                <div class="content">
                    <h3>Volkswagen Taigun</h3>
                    <div class="price"> <span>price : </span> ₹ 11.40 Lakh </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 5 Seater
                        <span class="fas fa-circle"></span> Manual & Automatic (TC & DCT)
                        <span class="fas fa-circle"></span> Petrol
                        <span class="fas fa-circle"></span> 187 bhp
                        <span class="fas fa-circle"></span> 999 to 1498 cc
                    </p>
                    <a href="#featured" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/p8.png" alt="">
                <div class="content">
                    <h3>Kia Seltos</h3>
                    <div class="price"> <span>price : </span> ₹ 10.19 Lakh </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 5 Seater
                        <span class="fas fa-circle"></span> Manual & Automatic (TC , CVT & DCT)
                        <span class="fas fa-circle"></span> Petrol & Diesel
                        <span class="fas fa-circle"></span> 113-138 bhp
                        <span class="fas fa-circle"></span> 1353 to 1497 cc
                    </p>
                    <a href="#featured" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/p9.png" alt="">
                <div class="content">
                    <h3>Audi Q2</h3>
                    <div class="price"> <span>price : </span> ₹ 35.00 Lakh </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 4 Seater
                        <span class="fas fa-circle"></span> Manual & Automatic (TC)
                        <span class="fas fa-circle"></span> Petrol 
                        <span class="fas fa-circle"></span> 188 bhp
                        <span class="fas fa-circle"></span> 1984 cc
                    </p>
                    <a href="#featured" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/p10.png" alt="">
                <div class="content">
                    <h3>MINI Cooper SE</h3>
                    <div class="price"> <span>price : </span> ₹ 50.90 Lakh </div>
                    <p>
                        
                        <span class="fas fa-circle"></span> 4 Seater
                        <span class="fas fa-circle"></span> Automatic 
                        <span class="fas fa-circle"></span> Electric 
                        <span class="fas fa-circle"></span> 181bhp
                        <span class="fas fa-circle"></span> Battery Capacity: 32.6kWh
                    </p>
                    <a href="#featured" class="btn">check out</a>
                </div>
            </div>
<!-- ************************************************************************************************************************ -->

    <?php 
        require "connection.php";

        $query = "select * from add_car";
        $result = mysqli_query($con, $query);

        if(mysqli_num_rows($result) > 0)
            {
                foreach($result as $row)
                    {
                        ?>
                            <div class="swiper-slide box">
                                <img src="<?php echo "admin_page/upload_car_image/".$row['car_img'];?>" alt="image">
                                <div class="content">
                                    <h3><?php echo $row['car_name'];?></h3>
                                    <div class="price"> <span>price : </span> ₹ <?php echo $row['car_price'];?> Lakh </div>
                                    <p>
                                        
                                        <span class="fas fa-circle"></span> <?php echo $row['fe_1'];?>
                                        <span class="fas fa-circle"></span> <?php echo $row['fe_2'];?>
                                        <span class="fas fa-circle"></span> <?php echo $row['fe_3'];?>
                                        <span class="fas fa-circle"></span> <?php echo $row['fe_4'];?>
                                        <span class="fas fa-circle"></span> <?php echo $row['fe_5'];?>
                                    </p>
                                    <a href="#featured" class="btn">check out</a>
                                </div>
                            </div>
                            <?php
                    }
            }
        else
            {
                ?>
                    <!-- <tr>No Record Available</tr> -->
                    <?php
            }
            

     ?>

<!-- ********************************************************************************************************************************** -->
        </div>

        <div class="swiper-pagination"></div>

    </div>
 
</section>

<section class="services" id="services">

    <h1 class="heading"> our services </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-car"></i>
            <h3>car selling</h3>
            <p>You can sell your car online by just filling basic information and your Ad is good to go live.</p>
            <a href="#services" class="btn" style="margin-top: 35px;"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>parts repair</h3>
            <p>To apply repair management to an item, the item must be set up with a service object relation on a service order.</p>
            <a href="#services" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-car-crash"></i>
            <h3>car insurance</h3>
            <p>If your car causes injuries to a third party or damages surrounding property, then this policy will cover resulting legal expenses.</p>
            <a href="#services" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-car-battery"></i>
            <h3>battery replacement</h3>
            <p>Some cars will not require the removal of the battery while replacing battery cables, but even if it is not necessary.</p>
            <a href="#services" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-gas-pump"></i>
            <h3>oil change</h3>
            <p>These steps explain how to change your oil and oil filter, Most vehicles use similar steps, but steps vary by vehicle.</p>
            <a href="#services" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>24/7 support means customers can get help and find answers to questions as soon as they come up—24/7 and in real-time.</p>
            <a href="#services" class="btn"> read more</a>
        </div>

    </div>

</section>

<section class="featured" id="featured">

    <h1 class="heading"> featured cars </h1>

    <div class="swiper featured-slider">

       <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="png/f1.png" alt="Tata Altroz">
                <div class="content">
                    <h3>Tata Altroz</h3>
                    
                    <div class="price">₹ 6.29 Lakh</div>
                    <a href="user_login.php" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/f2.png" alt="Tata Punch">
                <div class="content">
                    <h3>Tata Punch</h3>
                    
                    <div class="price">₹ 5.93 Lakh</div>
                    <a href="user_login.php" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/f3.png" alt="Maruti Suzuki S-Cross">
                <div class="content">
                    <h3>Maruti Suzuki S-Cross</h3>
                    
                    <div class="price">₹ 8.72 Lakh</div>
                    <a href="user_login.php" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/f4.png" alt="Kia Sonet">
                <div class="content">
                    <h3>Kia Sonet</h3>
                    
                    <div class="price">₹ 7.15 Lakh</div>
                    <a href="user_login.php" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/f9.png" alt="Hyundai Verna">
                <div class="content">
                    <h3>Hyundai Verna</h3>
                    
                    <div class="price">₹ 9.40 Lakh</div>
                    <a href="user_login.php" class="btn">check out</a>
                </div>
            </div>

       </div>

       <div class="swiper-pagination"></div>

    </div>

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
 
             <div class="swiper-slide box">
                 <img src="png/f5.png" alt="Skoda Superb">
                 <div class="content">
                     <h3>Skoda Superb</h3>
                     
                     <div class="price">₹ 32.85 Lakh</div>
                     <a href="user_login.php" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="png/f6.png" alt="MG Hector Plus">
                 <div class="content">
                     <h3>MG Hector Plus</h3>
                     
                     <div class="price">₹ 14.65 Lakh</div>
                     <a href="user_login.php" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="png/f7.png" alt="Jeep Compass">
                 <div class="content">
                     <h3>Jeep Compass</h3>
                     
                     <div class="price">₹ 18.38 Lakh</div>
                     <a href="user_login.php" class="btn">check out</a>
                 </div>
             </div>
 
             <div class="swiper-slide box">
                 <img src="png/f8.png" alt="Hyundai Creta">
                 <div class="content">
                     <h3>Hyundai Creta</h3>
                     
                     <div class="price">₹ 10.44 Lakh</div>
                     <a href="user_login.php" class="btn">check out</a>
                 </div>
             </div>

             <div class="swiper-slide box">
                 <img src="png/f10.png" alt="Toyota Urban Cruiser">
                 <div class="content">
                     <h3>Toyota Urban Cruiser</h3>
                     
                     <div class="price">₹ 9.02 Lakh</div>
                     <a href="user_login.php" class="btn">check out</a>
                 </div>
             </div>
 
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>

<section class="newsletter">
    
    <h3>subscribe for latest updates</h3>
    <p>So you can easily watch new car models..!!</p>

   <form action="subscribe.php" method="POST">
        <input type="email" name="semail" placeholder="enter your email">
        <input type="submit" value="subscribe" name="subscribe">
   </form>

</section>

<section class="reviews" id="reviews">

    <h1 class="heading"> client's review </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="png/r4.jpg" alt="">
                <div class="content">
                    <p>Nearing 1 year completion of my Kia Seltos. not even a small lag till date. and super quiet engine until 100 km/h speed.</p>
                    <h3>john</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/r3.jpg" alt="">
                <div class="content">
                    <p>Everything is appreciable in this small though in looks but very spacious for a family of 5. </p>
                    <h3>RAASHI KHANNA</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/pic-3.png" alt="">
                <div class="content">
                    <p>Nothing much to complain about this mini Cooper. this has become our family member right from the time of purchase.</p>
                    <h3>SAYIRAM SANKAR</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/r4.jpg" alt="">
                <div class="content">
                    <p>Super quiet engine, powerfull ac and excellent speaker system makes this car an ideal companion for city as well on highway.</p>
                    <h3>Vishvendra Shinde</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/r2.png" alt="">
                <div class="content">
                    <p>Buying experience is awesome and Dealer also helped us to find the correct model as per requirement.</p>
                    <h3>akshai varde</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="png/r1.png" alt="">
                <div class="content">
                    <p>The riding experience is just freaking fantastic and ride quality is awesome as well. </p>
                    <h3>Sameera reddy</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="contact" id="contact">

    <h1 class="heading">contact us</h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30153.788252261566!2d72.82321484621745!3d19.141690214227783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b63aceef0c69%3A0x2aa80cf2287dfa3b!2sJogeshwari%20West%2C%20Mumbai%2C%20Maharashtra%20400047!5e0!3m2!1sen!2sin!4v1632137920043!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>

        <form action="get_in_touch.php" method="POST">
            <h3>get in touch</h3>
            <input type="text" placeholder="your name" class="box" name="tname" required>
            <input type="email" placeholder="your email" class="box" name="temail" required>
            <input type="text" placeholder="subject" class="box" name="tsubject" required>
            <textarea placeholder="your message" class="box" cols="30" rows="10" name="tmessage" required></textarea>
            <input type="submit" value="send message" class="btn" name="get_in_touch">
        </form>

    </div>

</section>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Pune </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Ahmedabad </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Bangalore </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Mumbai </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Delhi </a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#vehicles"> <i class="fas fa-arrow-right"></i> vehicles </a>
            <a href="#services"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#featured"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#reviews"> <i class="fas fa-arrow-right"></i> reviews </a>
            <a href="#contact"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> hirenpansheriya21@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Mumbai, india - 400047 </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

  

</section>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="script.js"></script>

</body>
</html>