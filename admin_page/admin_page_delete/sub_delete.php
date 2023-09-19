<?php

    require '../connection.php'; 

    $email = $_GET['delete'];

    $delete = "DELETE FROM `subscribe` WHERE semail = '$email'";
    $result = mysqli_query($con,$delete);

        if($result)
            {
                echo "<script>
                            alert('Delete Successfully !!');
                            window.location.href = '../subscribe.php';
                    </script>";
            }
        else
            {
                echo "<script>
                            alert('Delete Error !!');
                            window.location.href = '../subscribe.php';
                    </script>";
            }
?>