<?php
        session_start();
        if(!isset($_SESSION['AdminLoginId']))
            {
                header("location: admin_form.php");
            }
?>


<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- --======== CSS ======== -->
    <link href="s.css" rel="stylesheet"/>
     
    <!-- --===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title> 

    <style>
        .boxes .box1:hover
            {
                background-color: #4da3ffa8;
                transition: .03s;
            }
        .boxes .box2:hover
            {
                background-color: #fffeaceb;
                transition: .03s;
            }
        .overview .boxes .box3
            {
                background-color: #c490f6;
            }
        .boxes .box3:hover
            {
                background-color: #d1b3ee;
                transition: .03s;
            }
        .overview .boxes .box4
            {
                margin-top: 20px; 
                background-color: #13dfdf;
            }
        .boxes .box4:hover
            {
                background-color: #13dfdf8f;
                transition: .03s;
            }
        .overview .boxes .box5
            {
                margin-top: 20px; 
                background-color: #59d04a;
                margin-right: 485px;
            }
        .boxes .box5:hover
            {
                background-color: #90dc86;
                transition: .03s;
            }
        .overview .title
            {
                padding: 15px;
                background-color: #C0C0C0;
                border-radius: 5px;
                width: 230px;
            }
        .overview .boxes
            {
                margin-top: 50px;
            }
    </style>
    
</head>
<body>
    <nav>
        <div class="logo-name">
            
            <span class="logo_name" style="color: black; font-size: 25px; font-weight:600;"><span style="color: #f9d806;">HR</span>wheels&reg;</span>
        </div>

        <div class="menu-items" style="background-color: #bbb; padding: 63px; margin-top: -49px; width: 261px; margin-left: -18px; height: 1080px;">
            <ul class="nav-links" style="margin-left: -40px;">
                <li>
                    <a href="dashboard.php"><i class="uil uil-estate"></i><span class="link-name">Dashboard</span></a>
                </li>

                <li>
                    <a href="register_user.php"><i class="uil uil-user-square"></i><span class="link-name">Register User</span></a>
                </li>

                <li>
                    <a href="car_book.php"><i class="uil uil-car-sideview"></i><span class="link-name">Car Booking</span></a>
                </li>

                <li>
                    <a href="user_message.php"><i class="uil uil-envelope-check"></i><span class="link-name">User Message</span></a>
                </li>

                <li>
                    <a href="subscribe.php"><i class="uil uil-check-circle"></i><span class="link-name">Subscribe</span></a>
                </li>

                <li>
                    <a href="see_car.php"><i class="uil uil-plus-circle"></i><span class="link-name">Add Car</span></a>
                </li>

            </ul>
            
           
        </div>
    </nav>

    <section class="dashboard">
        <div class="top" style="display: flex;">
            <div class="header" style="display: flex; justify-content: space-between; align-items: center; margin-left: 1140px; padding: 15px;">
                <h1 style="font-size: 30px; margin-left: -10px;">Hi...<?php
                 echo $_SESSION['AdminLoginId']
                 ?></h1>

                    <form method="POST">
                        <button name="LogOut" class="logout" style="background-color: #ffee80; margin-left: 15px; font-size: 15px; padding: 8px 12px; border: 2px solid black; border-radius: 5px; font-family: poppins; font-weight: 900;">Log Out</button></form>
                                    <?php 
                                        if (isset($_POST['LogOut'])) 
                                            {
                                                session_destroy();
                                                header("location: ../index.php");
                                            }
                                    ?>
                    </form>
            </div>
        </div> 

        <div class="dash-content">
            <div class="overview" id="dashboard">

                <div class="title" style="margin-top: 35px;">
                    <i class="uil uil-estate" style="color: white; background-color: blue;"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <a href="register_user.php"><i class="uil uil-user-square"></i></a>
                        <span class="text"><h3>Total Register User</h3></span>

                            <?php
                                    require 'connection.php';

                                    $query = "SELECT fname FROM registration ORDER BY fname";
                                    $result = mysqli_query($con,$query);

                                    $row = mysqli_num_rows($result);
                                    echo '<h3> '.$row.' </h3>';

                            ?>
                    </div>

                    <div class="box box2">
                        <a href="car_book.php"><i class="uil uil-car-sideview"></i></a>
                        <span class="text"><h3>Car Booked</h3></span>

                            <?php
                                    require 'connection.php';

                                    $query = "SELECT name FROM car_booking ORDER BY name";
                                    $result = mysqli_query($con,$query);

                                    $row = mysqli_num_rows($result);
                                    echo '<h3> '.$row.' </h3>';

                            ?>
                    </div>

                    <div class="box box3">
                        <a href="user_message.php"><i class="uil uil-envelope-check"></i></a>
                        <span class="text"><h3>User Message</h3></span>

                            <?php
                                    require 'connection.php';

                                    $query = "SELECT tname FROM get_in_touch ORDER BY tname";
                                    $result = mysqli_query($con,$query);

                                    $row = mysqli_num_rows($result);
                                    echo '<h3> '.$row.' </h3>';

                            ?>
                    </div>

                    <div class="box box4">
                        <a href="subscribe.php"><i class="uil uil-check-circle"></i></a>
                        <span class="text"><h3>Total subscribe</h3></span>

                            <?php
                                    require 'connection.php';

                                    $query = "SELECT semail FROM `subscribe` ORDER BY semail";
                                    $result = mysqli_query($con,$query);

                                    $row = mysqli_num_rows($result);
                                    echo '<h3> '.$row.' </h3>';

                            ?>
                    </div>

                    <div class="box box5">
                        <a href="see_car.php"><i class="uil uil-plus-circle"></i></a>
                        <span class="text"><h3>Add Car</h3></span>

                            <?php
                                    require 'connection.php';

                                    $query = "SELECT id FROM `add_car` ORDER BY id";
                                    $result = mysqli_query($con,$query);

                                    $row = mysqli_num_rows($result);
                                    echo '<h3> '.$row.' </h3>';

                            ?>
                    </div>

             </div>
        </div>

            
    </section>

    <script src="script.js"></script>
</body>
</html>