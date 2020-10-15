<?php

    include("dbconfig.php");
    require("connect.php");

    $name = $email = $phone = $password = $cpassword = "";

    if($_SERVER["REQUEST_METHOD"] =="POST"){
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $phone = test_input($_POST["phone"]);
        $password = test_input($_POST["password"]);
        $cpassword = test_input($_POST["cpassword"]);

        $cond = 0;

        if($cond == 0){
            $cond = validateUser($name, $email, $phone, $password, $cpassword);
            if($cond == 0){
                $cond = checkUserExists($con, $name, $email, $phone, $password);
                if($cond == 0){
                    $cond = printAllDetails($name, $email, $phone, $password, $cpassword);
                }
                
            }
        }
   
    }


    function validateUser($name, $email, $phone, $password, $cpassword){

        if($name == $email and  $phone == $password and $cpassword==$name and $name == ""){
            echo "<script language='javascript'> window.alert('No fields are given')</script>";
            echo "<script type='text/javascript'>location.href = 'signup.html';</script>";
            return 1;

        }
        if($name == ""){
            echo "<script language='javascript'> window.alert('Name is not given')</script>";
            echo "<script type='text/javascript'>location.href = 'signup.html';</script>";
            return 1;
        }

        if($email == ""){
            echo "<script language='javascript'> window.alert('Email is not given')</script>";
            echo "<script type='text/javascript'>location.href = 'signup.html';</script>";
            return 1;
        }

        if($phone == ""){
            echo "<script language='javascript'> window.alert('Phone number is not given')</script>";
            echo "<script type='text/javascript'>location.href = 'signup.html';</script>";
            return 1;
        }

        if($password == ""){
            echo "<script language='javascript'> window.alert('Password is Not Given')</script>";
            echo "<script type='text/javascript'>location.href = 'signup.html';</script>";
            return 1;
        }

        if($cpassword == ""){
            echo "<script language='javascript'> window.alert('Confirmed Password is Not Given')</script>";
            echo "<script type='text/javascript'>location.href = 'signup.html';</script>";
            return 1;
        }

        if($cpassword == $password){
            echo "\nUser entries are validated";
            return 0;
        }
        else{
            echo "<script language='javascript'> window.alert('Entered Password and Confirmed Password Do Not Match')</script>";
            echo "<script type='text/javascript'>location.href = 'signup.html';</script>";
            return 1;
        }


    }

    function checkUserExists($con, $name, $email, $phone, $password){
        $rs = mysqli_query($con, "select * from users where email='$email'");
    
        if($rs || mysqli_num_rows($rs)==0){
            $query = "insert into users (name, email, phone, passw) values ('$name', '$email',  $phone, '$password')";
            $rs=mysqli_query($con, $query);
            if($rs){
                echo "<script language='javascript'> window.alert('Thank you for registering to NaiCafe')</script>";
                echo "<script type='text/javascript'>location.href = 'login.php';</script>";
            }
            else{
                echo "<script language='javascript'> window.alert('User already exists\nSignup failed')</script>";
                echo "<script type='text/javascript'>location.href = 'signup.html';</script>";
            }
            return 0;
        }
        else{
            return 1;
        }
    }

    function printAllDetails($name, $email, $phone, $password, $cpassword){
        echo "\n$name";
        echo "\n$email";
        echo "\n$phone";
        echo "\n$password";
        echo "\n$cpassword";
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    
?>

