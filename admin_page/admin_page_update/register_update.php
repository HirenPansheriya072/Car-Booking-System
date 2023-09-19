<?php

    include "../connection.php";
    error_reporting(0);
    
    $fname = $_GET['fn'];
    $lname = $_GET['ln'];
    $email = $_GET['em'];
    $address = $_GET['add'];
    $phone = $_GET['ph'];
    $password = $_GET['pass'];
    
?>

<html>
    <head>
        <title> Update Registration </title>
        
        <style>
            body
            {
                background-color: whitesmoke;
            }
            form{
                display: block;
                padding: 119px;
                text-align: center;
                margin-top: -65px;
                width: 16rem;
                height: 420px;
                border-radius: 0.5rem;
                margin-left: 570px;
                box-shadow: 0.5rem 1rem rgb(0 0 0 / 10%);
                border: 0.1rem solid rgba(0,0,0,.1);
                background: white;
            }
            
            .btn{
                width: 132px;
                height: 45px;
                display: block;
                margin-left: 55px;
                background-color: #ffee80;
                margin-top: 5px;    
                border-radius: 9px;
                font-size: 20px;
            }
            .btn:hover
            {
                background-color: #f9d806;
            }
            button.close
            {
                position: absolute;
                top: 8px;
                right: 10px;
                height: 73px;
                color: black;
                    font-size: 3rem;
                border: none;
                margin-right: 20px;
                background-color: whitesmoke;
                font-weight: 900;
                font-size: 45px;
                font-family: cursive;
            }
            input  
            {
                    width: 350px;
                    height: 50px;
                    border-radius: 0.5rem;
                    margin-left: -50px;
                    font-size: 18px;
            }
            
            .form
            {
                margin-top: -90px;
            }
            .gender
            {
                width: 350px;
                border-radius: 0.5rem;
                height: 50px;
                border-color: black;
                border-width: 2px;
                margin-left: -50px;
            }
            nav
            {
                padding: 1rem 9%;
                margin-left: -104px;
                margin-top: -29px;
            }
            ul
            {
                font-size: 2.5rem;
                color: black;
                font-weight: bold;
            }
            nav,ul,a
            {
                color: black;
                text-decoration: none;
            }
            span
            {
                color: #f9d806;
            }
            h3
            {
                
                border-radius: 5px;
                background-color: #f9d806;
                padding: 20px 0px;
                margin-top: -121px;
                margin-left: -120px;
                width: 496px;
                font-size: 30px;
            }
            .btn{
                width: 132px;
                height: 45px;
                display: block;
                margin-left: 55px;
                background-color: #ffee80;
            }
            .btn:hover
            {
                background-color: #f9d806;
            }
        </style>

    </head>
    <body>
    <nav>
        <ul><a href="../register_user.php" class="logo"> <span>HR</span>wheels&reg; </a></ul>
        </nav>

        
        <div class="registration popup">
            <form action="r_update.php" method="GET">
                        <button type="btn" formaction="../register_user.php" name="close" class="close">X</button>
                    <div class="form">
                        <h3 style="font-family: 'poppins',sans-serif";>Update Registration</h3>

                        <input type="text" name='fname' placeholder="First Name" value = "<?php echo "$fname" ?>"><br><br>
                        <input type="text" name='lname' placeholder="Last Name" value = "<?php echo "$lname" ?>"><br><br>
                        <input type="email" name='email' placeholder="Email" value = "<?php echo "$email" ?>"><br><br>
                        <input type="text" name='address' placeholder="Address" value = "<?php echo "$address" ?>"><br><br>
                        <input type="tel" name='phone' placeholder="Phone no." maxlength = 10 minlength = 10 value = "<?php echo "$phone" ?>"><br><br>
                        <input type="password" name='password' placeholder="Create Password" value = "<?php echo "$password" ?>"><br><br>
                        
                            <select name='gender' class="gender" >
                                <option value="none" style="width: 15px;"> Select you gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                
                            </select>
                            <br><br>
                        <button type="submit"  name="submit" value="Submit" class="btn">Submit</button>
                    </div>
            </form>
        </div>
    </body>
</html>

