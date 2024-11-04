<?php

    //Database Connection Variables
    $servername = "localhost";
    $username   = "root";
    $dbpassword = "";
    $database   = "piz_tech_portfolio";  

    //Database connection handle
    $connection = mysqli_connect($servername,$username,$dbpassword,$database) or die(mysql_error());

?>