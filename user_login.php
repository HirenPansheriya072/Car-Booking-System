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
              form
                  {
                    display: block;
                    padding: 50px;
                    text-align: center;
                    margin-top: -20px;
                    width: 24rem;
                    height: 400px;
                    border-radius: 0.5rem;
                    margin-left: 600px;
                    box-shadow: 0.5rem 1rem rgb(0 0 0 / 10%);
                    border: 0.1rem solid rgba(0,0,0,.1);
                    background: #fff;
                  }
              .box{
                    height: 50px;
                    width: 380px;
                    margin-top: 9px;
                    font-size: 15px;
                  }
              .btn
                  {
                    width: 132px;
                    height: 45px;
                    display: block;
                    margin-left: 125px;
                    background-color: #ffee80;
                    margin-top: 150px; 
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
                    font-family: cursive  ;
                    background: transparent;
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
              form .buttons
                  {
                    display: flex;
                    gap:1rem;
                    align-items: center;
                  }

              .btn
                  {
                    display: block;
                    width:100%;
                    margin:.5rem 0;
                    margin-top: -15px;
                  }
              p
                  {
                    padding: 1rem 0;
                    color: #666;
                    margin-top: -9px;
                    font-size: 16px;
                    font-family: 'Poppins', sans-serif;
                  }
              p a
                  {
                    color: #f9d806;
                    text-decoration: underline;
                    font-size: 18px;
                  }
              .buttons a
                  {
                    display: grid;
                    align-content: space-around;
                  }
        </style>
  </head>
    <body>
            <nav>
                <ul><a href="index.php" class="logo"> <span>HR</span>wheels&reg; </a></ul>
            </nav>
       
        <div class="popup">
            <form action="user_login_database.php" method="POST">
                        <button type="btn" formaction="index.php" name="close" class="close">X</button>

                        <h3 style="font-family: 'poppins',sans-serif";>User Login</h3>
                        <input type="text" name="UserName" placeholder="Username" class="box" ><br><br>
                        <input type="password" name="UserPassword" placeholder="Password" class="box" ><br><br>
                        <p> Forget Your Password <a href="reset_password/forget_pass.php">Click Here</a> </p>
                        <button type="btn"  name="UserLogin"  class="btn">Login</button>
                        <p>Or Login With</p>
                        <div class="buttons">
                            <a href="#" class="btn"> Google </a>
                            <a href="#" class="btn"> Facebook </a>
                        </div>
                        <p> Don't Have An Account <a href="registration.php">Create One</a> </p>
            </form>
        </div>
    </body>
</html>