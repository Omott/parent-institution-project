<?php

    require('connect.inc.php');

    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['email']) && isset($_POST['pass'])){

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];


        $query = "INSERT INTO parent_info (fname, lname, phone, address, email, pass) VALUES ('$fname', '$lname', '$phone', '$address', '$email', '$pass')";
        $result = mysqli_query($conn, $query);
        if($result){
            header("Location:../fillForm.php?reg=successful");
        }else{
            echo "User Registration Failed";
        }
        
        
    } else {
        echo "Failed to submit form";
        header("Location:../fillForm.php?reg=failed");
    }       
    

?>