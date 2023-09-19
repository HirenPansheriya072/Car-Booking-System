<?php
// error_reporting(0);
    session_start();

    require "connection.php";

if(isset($_POST['add_car']))
    {
        $c_name = $_POST['c_name'];
        $c_price = $_POST['c_price'];               
        $f_1 = $_POST['c_features_1'];
        $f_2 = $_POST['c_features_2'];
        $f_3 = $_POST['c_features_3'];
        $f_4 = $_POST['c_features_4'];
        $f_5 = $_POST['c_features_5'];
        $image = $_FILES['car_image']['name'];

            $query = "INSERT INTO `add_car` (`car_name`, `car_price`, `fe_1`, `fe_2`, `fe_3`, `fe_4`, `fe_5`, `car_img`) VALUES ('$c_name','$c_price','$f_1','$f_2','$f_3','$f_4','$f_5','$image')";
            $result = mysqli_query($con,$query);

            if ($result) 
                {
                    move_uploaded_file($_FILES["car_image"]["tmp_name"], "upload_car_image/".$_FILES["car_image"]["name"]);
                    echo "<script>
                                    alert('Car Add Successfully');
                                    window.location.href = 'see_car.php';
                            </script>";
                }
            else
                {
                    echo "<script>
                                    alert('Something went wrong. Please try again.');
                                    window.location.href = 'see_car.php';
                            </script>";
                }
    }

// ****************************************************************************************************************************
// ****************************************************************************************************************************

if(isset($_POST['update_add_car']))
    {
        $id = $_POST['u_id'];
        $car_name = $_POST['u_c_name'];
        $car_price = $_POST['u_c_price'];
        $car_fe_1 = $_POST['u_c_features_1'];
        $car_fe_2 = $_POST['u_c_features_2'];
        $car_fe_3 = $_POST['u_c_features_3'];
        $car_fe_4 = $_POST['u_c_features_4'];
        $car_fe_5 = $_POST['u_c_features_5'];

        $new_img = $_FILES['car_image']['name'];
        $old_img = $_POST['car_img_old'];

        if($new_img != '')
            {
                $update_filename = $_FILES['car_image']['name'];
            }
        else
            {
                $update_filename = $old_img;
            }

        if($_FILES['car_image']['name'] != '')
            {
                if(file_exists("upload_car_image/" . $_FILES['car_image']['name']))
                {   
                    $filename = $_FILES['car_image']['name'];
                    header('location: see_car.php');
                }
            }
        else
            {
                $query = "UPDATE `add_car` SET `car_name`='$car_name',`car_price`='$car_price',`fe_1`='$car_fe_1',`fe_2`='$car_fe_2',`fe_3`='$car_fe_3',`fe_4`='$car_fe_4',`fe_5`='$car_fe_5',`car_img`='$update_filename' WHERE `id`='$id'";
                $result = mysqli_query($con,$query);

                if($result)
                    {
                        if($_FILES['car_image']['name'] != '')
                            {
                                move_uploaded_file($_FILES["car_image"]["tmp_name"], "upload_car_image/".$_FILES["car_image"]["name"]);
                                unlink("upload_car_image/".$old_img);
                            }

                        echo "<script>
                                alert('Car Details Update Successfully');
                                window.location.href = 'see_car.php';
                        </script>";
                    }
                else
                    {
                        echo "<script>
                                alert('Some Error!!');
                                window.location.href = 'see_car.php';
                        </script>";
                    }
            }
    }

// ******************************************************************************************************************************************************************
// ******************************************************************************************************************************************************************

if(isset($_POST['delete_car_img']))
    {
        $id = $_POST['delete_id'];
        $car_img = $_POST['del_car_img'];

        $query = "DELETE FROM `add_car` WHERE id = '$id'";
        $result = mysqli_query($con, $query);

        if($result)
            {
                unlink("upload_car_image/".$car_img);
                echo "<script>
                    alert('Car Details Delete Successfully');
                    window.location.href = 'see_car.php';
                </script>";
            }
        else
            {
                echo "<script>
                    alert('Some Error!!');
                    window.location.href = 'see_car.php';
                </script>";
            }

    }



?>