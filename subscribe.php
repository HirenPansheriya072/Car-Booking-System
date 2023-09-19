<?php

    require_once('connection.php');
    

    $email = $_POST['semail'];

if(isset($_POST['subscribe']))
    
        {
            $user_exist_query = "SELECT * FROM subscribe WHERE semail = '$email'";
            $result = mysqli_query($con,$user_exist_query);
            
           
            if ($result) 
                {
                    mysqli_num_rows($result)>0;
                    $result_fetch = mysqli_fetch_assoc($result);
                    if($result_fetch['semail']==$_POST['semail'])
                        {
                           
                                        echo "<script>
                                                alert('Email already register');
                                                window.location.href = 'index.php';
                                            </script>";
                                    

                        }
                    else    
                        {
                            $query = "INSERT INTO `subscribe` VALUES ('$_POST[semail]')";
                            if(mysqli_query($con,$query))
                                {
                                    echo "<script>
                                                alert('Thanks For Subscribe');
                                                window.location.href = 'index.php';
                                        </script>";
                                }
                            else
                                {
                                    echo "<script>
                                                alert('Something Went Wrong Please Try Again');
                                                window.location.href = 'index.php';
                                        </script>";
                                }
                        }
                }
            else
                {
                    echo "<script>
                                alert('Cannot Run Query');
                                window.location.href = 'index.php';
                        </script>";

                }
        }
?>