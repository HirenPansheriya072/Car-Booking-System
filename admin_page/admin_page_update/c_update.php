<?php 
    include "../connection.php";

if($_GET["submit"])
        { 
            $cname = $_GET['name'];
            $email = $_GET['email'];
            $phone = $_GET['phone'];
            $address = $_GET['address'];
            $app = $_GET['appointment'];
            $car = $_GET['car_book'];

            $query = "UPDATE `car_booking` SET `email`='$email',`phone`='$phone',`address`='$address',`appointment`='$app',`car_name`='$car' WHERE `name`='$cname' ";
            $result = mysqli_query($con,$query);

            if($result)
             {
                echo "<script>
                            alert('Update Successfully !!');
                            window.location.href = '../car_book.php';
                    </script>";
            }
            else
                {
                    echo "<script>
                                alert('Update Error !!');
                                window.location.href = '../car_book.php';
                        </script>";
                }

        }
    else
        {
            echo "<script>
                    alert(' Error !!');
                    window.location.href = '../register_user.php';
                </script>";
    }

    
?>