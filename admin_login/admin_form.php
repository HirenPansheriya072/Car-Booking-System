<?php
  require("connection.php");
?>


<html>
    <head>
        <title> Forget Password </title>
        
        <style>
            body
            {
                background-color: whitesmoke;
            }
           form{
                display: block;
                padding: 50px;
                text-align: center;
                margin-top: 50px;
                width: 24rem;
                height: 245px;
                border-radius: 0.5rem;
                margin-left: 600px;
                box-shadow: 0.5rem 1rem rgb(0 0 0 / 10%);
                border: 0.1rem solid rgba(0,0,0,.1);
                background: #fff;
            }
            .box{
                height: 50px;
                width: 350px;
                margin-top: 9px;
                font-size: 15px;
            }
            .btn{
                width: 132px;
                height: 45px;
                display: block;
                margin-left: 125px;
                background-color: #ffee80;
                margin-top: 25px; 
                font-family: popiens;
                font-weight: 900;
                font-size: 25px;
                border-radius: 9px;
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
                font-weight: 900;
                font-size: 45px;
                font-family: cursive;
                background-color: transparent;
            }
            .btn:hover
            {
                background-color: #f9d806;
            }
            input
            {
                border-radius: 7px;
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
                margin-top: -51px;
                font-size: 30px;
                background-color: #f9d806;
                padding: 12px 0px;
                color: black;
                margin-left: -51px;
                width: 487px;
                border-radius: 5px;
            }
       </style>

    </head>
    <body>
            <nav>
              <ul><a href="../index.php" class="logo"> <span>HR</span>wheels&reg; </a></ul>
            </nav>
       
        <div class="popup">
           <form action="#" method="POST">
                        <button type="btn" formaction="../index.php" name="close" class="close">X</button>

                        <h3 style="font-family: 'poppins',sans-serif";>Admin Login</h3>
                        <input type="text" name="adminName" placeholder="Username"  class="box" ><br><br>
                        <input type="password" name="adminPassword" placeholder="Password"  class="box" ><br><br>
                        <button type="btn" formaction="#" name="submit" class="btn">Sign-In</button>
            </form>
        </div>

        <?php

          if (isset($_POST["submit"])) 
          {
            $query="SELECT * FROM `login` WHERE `admin_Name` = '$_POST[adminName]' AND `admin_Password` = '$_POST[adminPassword]'";
            $result=mysqli_query($con,$query);

            if (mysqli_num_rows($result)==1)
             {
               session_start();
               $_SESSION['AdminLoginId']=$_POST['adminName'];
               header("location: ../admin_page/dashboard.php");
             }
            else
             {
                echo "<script>alert('Incorrect Username & Password');</script>";
             }
          }

        ?>
    </body>
</html>