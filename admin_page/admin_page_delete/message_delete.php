<?php

    require '../connection.php'; 

    $email = $_GET['delete'];

    $delete = "DELETE FROM `get_in_touch` WHERE temail = '$email'";
    $result = mysqli_query($con,$delete);

        if($result)
            {
                echo "<script>
                            alert('Delete Successfully !!');
                            window.location.href = '../user_message.php';
                    </script>";
            }
        else
            {
                echo "<script>
                            alert('Delete Error !!');
                            window.location.href = '../user_message.php';
                    </script>";
            }
?>