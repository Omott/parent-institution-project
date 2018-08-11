<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Messages</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/stylesheet.css" />
    <script src="main.js"></script>

    <style>
            body{
                box-sizing: border-box;
                }
            .content{
                max-width: 650px;
                    margin: auto;
                padding-top: 50px;
                    text-align: center;
            }
            .profile-img-card {
                width: 150px;
                height: 150px;
                margin: 0 auto 10px;
                display: block;
                -moz-border-radius: 50%;
                -webkit-border-radius: 50%;
                border-radius: 50%;
            }
            textarea{
                    width:75%;
                    height:50%;
                    resize:none;
                }
                table{
                    padding:25px;
                }
                td{
                    padding: 15px;
                    border-right:5px solid black;
                    border-bottom: 5px solid black;
                }
                th{
                    padding: 5px;
                    border-right:5px solid black;
                    border-bottom: 5px solid black;
                }
    </style>
           
</head>
<body>
        <header class="content">
            <div> <img id="profile-img" class="profile-img-card" src="images/fuo.png" alt="fountain logo"/> </div>
            <div>
             <?php
             session_start();
             include 'include/connect.inc.php';
             $today_date = date("d-m-Y h:i:s:a", time());
                $sql="SELECT * FROM message_info";
                $result = mysqli_query($conn, $sql);
               while ($row = mysqli_fetch_assoc($result)){
                   echo '<table style="width:100%; border-bottom:1px solid black;">
                                <tr>
                                    <th>Message Info</th>
                                    <th>Message Content</th>
                                    <th>Date</th>
                                </tr>
                                <tr>
                                    <td>'.$row['heading'].'</td>
                                    <td>'.$row['info'].'</td>
                                    <td>'.$today_date.'</td>
                                </tr>
                        </table>';
                   
                    }
                
                
             
               
               
             ?>
            
                
            
            
            </div>
        </header>
            
        <nav></nav>
           
        <section></section>
           
        <article></article>
            
        <footer></footer>
            
            
            
</body>
</html>
            