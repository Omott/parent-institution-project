<!--home page for parent institution project-->
<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Landing Page</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="stylesheet.css">
        <style>
            .head{
                width:100%;
                background-color:#fffff;
                background-image:url('../Screenshot.png');
                padding: 5px 50px;
            }
        </style>
    </head>
    <body>
        <header class="head">
            <?php
                if(isset($_SESSION['u_first'])){
                    echo '<form method="post" action="include/logout.inc.php">';
                    echo '<button type="submit" name="submit">LOGOUT</button>';
                    echo '</form>';
                }
            ?>

        </header>