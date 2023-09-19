<?php 
    include "../connection.php";

if($_GET["submit"])
        { 
            $f_name = $_GET['fname'];
            $l_name = $_GET['lname'];
            $email = $_GET['email'];
            $address = $_GET['address'];
            $phone = $_GET['phone'];
            $password = $_GET['password'];
            $gender = $_GET['gender'];

            $query = "UPDATE `registration` SET `lname`='$l_name',`email`='$email',`address`='$address',`phone`='$phone',`password`='$password',`gender`='$gender' WHERE `fname`='$f_name'";
            $result = mysqli_query($con,$query);

            if($result)
             {
                echo "<script>
                            alert('Update Successfully !!');
                            window.location.href = '../register_user.php';
                    </script>";
            }
            else
                {
                    echo "<script>
                                alert('Update Error !!');
                                window.location.href = '../register_user.php';
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