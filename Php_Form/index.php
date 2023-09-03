<?php
    $server = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($server ,  $username , $password );

    if($connect){
        echo "connecting Successfull";
    }else{
        die("Connecting Error" + mysqli_connect_errno());
    }
    
    $name = $_POST['full_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $dec = $_POST['dec'];
    
    $sql = "INSERT INTO `student`.`student_details`(`s_name`, `s_age`, `s_gender`, `s_email`, `s_number`, `s_dec`) VALUES ('$name','$age','$gender','$email','$number','$dec')";

    if($connect -> query($sql) == true){
        echo "Inserted";
    }else{
        echo "Not Inserted $connect -> error";
    }
?>