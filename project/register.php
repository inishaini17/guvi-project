<?php

ini_set("display_errors", "1");
ini_set("display_startup_errors", "1");
error_reporting(E_ALL);

    if(isset($_POST['submit']))
    {
        $name= $_POST['name'];
        $email = $_POST['email'];
        $createpassword = $_POST['createpassword'];
        $confirmpassword = $_POST['confirmpassword']
    }

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sampledb";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

 
    $sql = "INSERT INTO in register (name, email, createpassword, confirmpassword ) VALUES ('0', '$name', '$email', '$createpassword', $confirmpassword')";
  
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    mysqli_close($con);

?>