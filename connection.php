<?php

$con = new mysqli('localhost','root','','admin_login');

if (mysqli_connect_errno())
    {
        echo "connection error";
    }

?>