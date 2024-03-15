<?php

    $connection = mysqli_connect('localhost','root','','yoga_website');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email= $_POST['email'];
        $phone = $_POST['phone'];
        $date_of_birth = $_POST['date_of_birth'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $looking_for = $_POST['looking_for'];
        $suggestion = $_POST['suggestion'];

        $request = " insert into the_yogist_007(name, email, phone, date_of_birth, address, gender, looking_for, suggestion)
                    values('$name', '$email', '$phone', '$date_of_birth', '$address', '$gender', '$looking_for', '$suggestion')";

        $result = mysqli_query($connection, $request);
        // if($result == true){
        //     header('location:book.php');
        // }else{
        //     echo"something went wrong try again";
        //     header('location:book.php');
        // }
        header('location:book.php');
    }else{
        echo"something went wrong try again";
    }




?>