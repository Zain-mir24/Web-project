<?php
    session_start();
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"webroject");

    $name= $_POST["username"];
    $email = $_POST["Email"];
    $pass=$_POST["Password"];

    $check = "SELECT * FROM usersignup WHERE Email='$email' && Password='$pass'";
    $result = mysqli_query($con,$check);
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "username already taken";
    }
    else{
        $sql = "INSERT INTO usersignup(Name,Email,Password) VALUES ('$name','$email','$pass')";
        mysqli_query($con,$sql);
        echo"Registration Successfull";
    }
?>