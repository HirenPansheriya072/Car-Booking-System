<?php

    require_once('connection.php');
    session_start();



// ************************************** FOR DELETE *************************************************
//     $action = $_POST['submit'];
//     echo $action."<br>";
// if ($action=="Submit") 
// {
// **************************************** END DELETE *********************************************



//  ************************FOR REGISTRATION***********************************************
    if(isset($_POST['submit']))

        {
            $user_exist_query = "SELECT * FROM registration WHERE fname = '$_POST[fname]' OR email = '$_POST[email]'";
            $result = mysqli_query($con,$user_exist_query);
            
            if ($result) 
                {
                        #if any user has already taken username or email
                    if(mysqli_num_rows($result)>0) #it will be executed if fname or email is already taken
                        {
                           $result_fetch = mysqli_fetch_assoc($result);
                                if($result_fetch['fname']==$_POST['fname'])
                                    {
                                        #error for username already register
                                        echo "<script>
                                                alert('$result_fetch[fname] - Username already taken');
                                                window.location.href = 'registration.php';
                                            </script>";
                                    }
                                else
                                    {
                                        #error for email already register
                                        echo "<script>
                                                alert('$result_fetch[email] - Email already register');
                                                window.location.href = 'registration.php';
                                            </script>";
                                    }

                        }
                    else    #it will be executed if no one has taken fname(username) or email before !!
                        {
                            // $password = password_hash($_POST['password'],PASSWORD_BCRYPT); //for hashing
                            $query = "INSERT INTO `registration` VALUES ('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[address]','$_POST[phone]','$_POST[password]','$_POST[gender]')";
                            if(mysqli_query($con,$query))
                                {
                                    #if data inserted successfully
                                    echo "<script>
                                                alert('Registration Successfully');
                                                window.location.href = 'index.php';
                                        </script>";
                                }
                            else
                                {
                                    #if data cnanot be insert
                                    echo "<script>
                                                alert('Registration Error');
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

// ************************************************* FOR DELETE ************************************************************************************
// }
// elseif ($action=="Delete") 
//         {
//             $sql = "DELETE FROM `registration` WHERE fname= '$_POST[fname]'";
//             $row =  mysqli_query($con,$sql);
//             if($row)
//                 {
//                     echo "<script>alert('Delete Successfully');window.location.href =  'registration.php';</script>";
                    
//                 }
//             else
//                 {
//                     echo "<script>alert('Delete Error');</script>";
//                 }

//         }    
// ************************************************* END DELETE ************************************************************************************


// **********************************************************************************************

// *************************FOR LOGIN*********************************************************************

    if(isset($_POST['UserLogin']))
        {                                                                                               
           $query = "SELECT * FROM registration WHERE fname = '$_POST[UserName]' OR email = '$_POST[UserName]'";
            $result = mysqli_query($con,$query);
                
                if($result)
                    {
                        if(mysqli_num_rows($result)==1)
                            {
                              $result_fetch = mysqli_fetch_assoc($result);
                              
                                // if(password_verify($_POST['password'],$result_fetch['password'])) 
                                if($result_fetch['password']==$_POST['UserPassword'])
                                    {
                                       #if password match
                                        $_SESSION['logged_in']=true;
                                        $_SESSION['UserName']=$result_fetch['fname'];
                                        header("location: user_login_index.php");
                                     }
                                else
                                    {
                                        #if password not match
                                        echo "<script>
                                                alert('Incorrect Password');
                                                window.location.href = 'user_login.php';
                                            </script>";
                                    }
                            }
                        else
                            {
                                echo "<script>
                                            alert('Username or Email Not Registered');
                                            window.location.href = 'user_login.php';
                                        </script>";
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

// ********************************************************************************************

?>