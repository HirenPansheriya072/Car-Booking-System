<?php

    require_once('connection.php');
   


if(isset($_POST['car_book']))

        {
            $user_exist_query = "SELECT * FROM registration WHERE `fname` = '$_POST[fullname]' OR email = '$_POST[email]'";
            $result = mysqli_query($con,$user_exist_query);
            
            if ($result) 
                {
                        #if any user has already taken username or email
                    if(!mysqli_num_rows($result)>0) #it will be executed if fname or email is already taken
                        {
                           $result_fetch = mysqli_fetch_assoc($result);
                                if($result_fetch['fname']==$_POST['fullname'])
                                    {
                                        #error for username already register
                                        echo "<script>
                                                    alert('Book Car with your Login Email ID');
                                                // alert('$result_fetch[fname] - Name already taken');
                                                window.location.href = '../user_login_index.php';
                                            </script>";
                                    }
                                else
                                    {
                                        #error for email already register
                                        echo "<script>
                                        alert('Book Car with your Login Email ID');
                                                // alert('$result_fetch[email] - Email already register');
                                                window.location.href = '../user_login_index.php';
                                            </script>";
                                    }

                        }
                    else    #it will be executed if no one has taken fname(username) or email before !!
                        {
                            // $password = password_hash($_POST['password'],PASSWORD_BCRYPT); //for hashing
                            $query = "INSERT INTO `car_booking` VALUES ('$_POST[fullname]','$_POST[email]','$_POST[phone]','$_POST[address]','$_POST[appointment]','$_POST[car_name]')";
                            if(mysqli_query($con,$query))
                                {
                                    #if data inserted successfully
                                    echo "<script>
                                                alert('Your car is booked !!🚗');
                                                window.location.href = '../user_login_index.php';
                                        </script>";
                                }
                            else
                                {
                                    #if data cnanot be insert
                                    echo "<script>
                                                alert('Oops. Something went wrong, please try again later');
                                                window.location.href = '../user_login_index.php';
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