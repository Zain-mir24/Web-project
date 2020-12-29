<?php
    session_start();
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"webroject");

    $email = $_POST["Email"];
    $pass= $_POST["Password"];

    $check="SELECT * FROM usersignup WHERE Email='$email' && Password='$pass'";
    $result=mysqli_query($con,$check); 
    $num=mysqli_num_rows($result);

    if($num == 1){
            // $sql=;
            $name=mysqli_query($con,"SELECT Name FROM usersignup WHERE Email='$email' && Password='$pass'");
            $sql=mysqli_fetch_array($name);
            $_SESSION['name']=$sql['Name'];
            header("Location: http://localhost/Project 1/login.php");
            exit;
    }
    else{
            header("Location: http://localhost/Project 1/index.php");
            exit;
    }
    ?>