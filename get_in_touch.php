<?php

    require_once('connection.php');
   


if(isset($_POST['get_in_touch']))

        {
            $user_exist_query = "SELECT * FROM get_in_touch WHERE tname = '$_POST[tname]' OR temail = '$_POST[temail]'";
            $result = mysqli_query($con,$user_exist_query);
            
            if ($result) 
                {
                        #if any user has already taken username or email
                    if(mysqli_num_rows($result)>0) #it will be executed if fname or email is already taken
                        {
                           $result_fetch = mysqli_fetch_assoc($result);
                                if($result_fetch['tname']==$_POST['tname'])
                                    {
                                        #error for username already register
                                        echo "<script>
                                                alert('$result_fetch[tname] - Name already taken');
                                                window.location.href = 'index.php';
                                            </script>";
                                    }
                                else
                                    {
                                        #error for email already register
                                        echo "<script>
                                                alert('$result_fetch[temail] - Email already register');
                                                window.location.href = 'index.php';
                                            </script>";
                                    }

                        }
                    else    #it will be executed if no one has taken fname(username) or email before !!
                        {
                            // $password = password_hash($_POST['password'],PASSWORD_BCRYPT); //for hashing
                            $query = "INSERT INTO `get_in_touch` VALUES ('$_POST[tname]','$_POST[temail]','$_POST[tsubject]','$_POST[tmessage]')";
                            if(mysqli_query($con,$query))
                                {
                                    #if data inserted successfully
                                    echo "<script>
                                                alert('We have received your message and will get back to you soon.');
                                                window.location.href = 'index.php';
                                        </script>";
                                }
                            else
                                {
                                    #if data cnanot be insert
                                    echo "<script>
                                                alert('Oops. Something went wrong, please try again later');
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