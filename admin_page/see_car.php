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
    <link href="../bootstrap/js/bootstrap.bundle.min.js" rel="stylesheet"/>



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
                        <button name="LogOut" style="background-color: #ffee80; margin-left: 15px; font-size: 15px; padding: 8px 12px; border: 2px solid black; border-radius: 5px; font-family: poppins; font-weight: 900;">Log Out</button></form>
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
                   <li class="breadcrumb-item" style="margin-top: 65px; display: flex;"><h4>Car Details</h4>
                   <a href="add_cars.php" style="background-color: #84b9ed; color:black; margin-left: 1050px; font-size: 20px; padding: 5px 12px; border: 2px solid black; border-radius: 5px; font-family: poppins; font-weight: 900; text-decoration: none;">Add Car</a>
                   </li>
                </ol>

            <div class="row">
                    <div class="col-md-12">
                    
                    <?php
                        if(isset($_SESSION['add']) && $_SESSION != '')
                            {
                                
                            }



                    ?>

                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                
                                <thead style="text-align: center;"  >
                                    <tr>
                                        <th>Id</th>
                                        <th>Car Name</th>
                                        <th>Car Price</th>
                                        <th>Features_1</th>
                                        <th>Features_2</th>
                                        <th>Features_3</th>
                                        <th>Features_4</th>
                                        <th>Features_5</th>
                                        <th>Car Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>

                                <tbody style="text-align: center;">
                                    <?php

                                        require 'connection.php';
                                        $query = "SELECT * FROM add_car";
                                        $query_run = mysqli_query($con,$query);

                                        while ($row = mysqli_fetch_assoc($query_run)) { ?>
                                            <tr>
                                                <td><?php echo $row['id'];?></td>
                                                <td><?php echo $row['car_name'];?></td>
                                                <td><?php echo $row['car_price'];?></td>
                                                <td><?php echo $row['fe_1'];?></td>
                                                <td><?php echo $row['fe_2'];?></td>
                                                <td><?php echo $row['fe_3'];?></td>
                                                <td><?php echo $row['fe_4'];?></td>
                                                <td><?php echo $row['fe_5'];?></td>
                                                <td>
                                                    <img src="<?php echo "upload_car_image/".$row['car_img'];?>" class="img-thumbnail" width="100px" height="100px"  alt="Car Name">
                                                </td>
                                                <td><a href="admin_page_update/add_update.php?idu= <?php echo $row['id']; ?>" class="btn btn-info">Edit</td>
                                                <td>
                                                    <!-- <a href="#" class="btn btn-danger"> -->
                                                        <form action="add_car_database.php" method="POST">
                                                            <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                                                            <input type="hidden" name="del_car_img" value="<?php echo $row['car_img'];?>">
                                                            
                                                            <button type="submit" name="delete_car_img" class="btn btn-danger">Delete</button>
                                                        </form>
                                                </td>
                                            </tr>
                                        
                                            <?php } ?>
                                    
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



