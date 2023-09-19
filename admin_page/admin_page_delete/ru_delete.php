<?php

    require '../connection.php'; 

    $email = $_GET['delete'];

    $delete = "DELETE FROM `registration` WHERE email = '$email'";
    $result = mysqli_query($con,$delete);

        if($result)
            {
                echo "<script>
                            alert('Delete Successfully !!');
                            window.location.href = '../register_user.php';
                    </script>";
            }
        else
            {
                echo "<script>
                            alert('Delete Error !!');
                            window.location.href = '../register_user.php';
                    </script>";
            }
?>