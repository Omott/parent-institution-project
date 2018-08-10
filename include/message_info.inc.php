<?php
    session_start();
    require('connect.inc.php');

    if(isset($_POST['submit'])){

        $heading = $_POST['heading'];
        $info = $_POST['info'];
       
        $query = "INSERT INTO message_info (heading, info) VALUES ('$heading', '$info')";
        $result = mysqli_query($conn, $query);
        if($result){
            header("Location:../enquiry.php?message=successful");
        }else{
            echo "Message Failed";
        }
        
        
    } else {
        echo "Failed to submit message";
        header("Location:../enquiry.php?message=failed");
    }       
    

?>