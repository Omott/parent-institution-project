<?php

session_start();

    include 'connect.inc.php';

    if(isset($_POST['submit'])){
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        if (empty($uid) || empty($pwd)){
            header("Location: ../parent_login.php?login=empty");
            exit();
        }else{
            $sql="SELECT * FROM parent_info WHERE email = '$uid'";
            $result = mysqli_query($conn, $sql);
           while ($row = mysqli_fetch_assoc($result)){
               if ($pwd != $row['pass']){
                header("Location: ../parent_home.php?login=failed");
               }
               else {
                $_SESSION['u_first'] = $row['fname'];
                $_SESSION['u_last'] = $row['lname'];
                $_SESSION['u_phone'] = $row['phone'];
                $_SESSION['u_address'] = $row['address'];
                $_SESSION['u_email'] = $row['email'];
               }
           
           }
            header("Location: ../parent_home.php?login=successful");
            exit();
        }
    }

?>


 

