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
    <link rel="stylesheet" href="s.css">
     
    <!-- --===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== Bootstrap Link ===== -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"/>


    <title>Admin Dashboard Panel</title> 
    
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
            <div class="header" style="display: flex; justify-content: space-between; align-items: center; font-size: 15px; margin-left: 1140px; padding: 15px;">
                <h1 style="font-size: 30px; margin-left: -10px;">Hi...<?php
                 echo $_SESSION['AdminLoginId']
                 ?></h1>

                    <form method="POST">
                        <button name="LogOut" style="background-color: #ffee80; margin-left: 15px; font-size: 15px; padding: 8px 12px; border: 2px solid black; border-radius: 5px; font-family: poppins; font-weight: 900;">Log Out</button>
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

        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
                <ol class="breadcrumb mb-4">
                   <li class="breadcrumb-item" style="margin-top: 65px;"><h4>Car Booked</h4></li>
                </ol>

            
            <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone no.</th>
                                        <th>Address</th>
                                        <th>Come to the Branch:</th>
                                        <th>Car Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php

                                        require 'connection.php';
                                        $query = "SELECT * FROM car_booking";
                                        $query_run = mysqli_query($con,$query);

                                            if(mysqli_num_rows($query_run) > 0)
                                                {
                                                    foreach($query_run as $row)
                                                        {
                                                            ?>
                                                                <tr>
                                                                    <td><?= $row['name']; ?></td>
                                                                    <td><?= $row['email']; ?></td>                                                                   
                                                                    <td><?= $row['phone']; ?></td> 
                                                                    <td><?= $row['address']; ?></td>
                                                                    <td><?= $row['appointment']; ?></td>
                                                                    <td><?= $row['car_name']; ?></td>    
                                                                    <td><button class="btn btn-success"><a style="color: white;" href="admin_page_update/car_book_update.php?name=<?php echo $row['name']; ?>&email=<?php echo $row['email']; ?>&phone=<?php echo $row['phone']; ?>&add=<?php echo $row['address']; ?>&app=<?php echo $row['appointment']; ?>&cname=<?php echo $row['car_name']; ?>">Edit</a></button></td> 
                                                                    <td><button class="btn btn-danger"><a style="color: white;" href="admin_page_delete/car_delete.php?delete=<?php echo $row['email']; ?>">Delete</a></button></td> 
                                       
                                                                </tr>
                                                            <?php
                                                        }
                                                }
                                            else
                                                {
                                                    ?>
                                                        <tr>
                                                                <td colspan="9">No Recored Found</td>
                                                        </tr>
                                    <?php
                                                }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
            </div>
        </div>

    </section>
    <script src="script.js"></script>
</body>
</html> 