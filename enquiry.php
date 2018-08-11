<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Enquiries/Complaints</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/stylesheet.css" />
    <script>
        
    </script>

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
    </style>
           
</head>
<body>
        <header class="content">
                <img id="profile-img" class="profile-img-card" src="images/fuo.png" alt="fountain logo" />
            <div>
                <form method="POST" action="include/message_info.inc.php">
                    <input type="text" name="heading" placeholder="Subject/Title">
                    <br><br>
                    <label><strong>Content Below:</strong></label><br>
                    <textarea name="info" rows="25" cols="25" maxlength="290" wrap="hard">
                            
                    </textarea>
                    <br><br>
                    <input type="submit" name="submit" id="smsg" value="Send" style="width:100px;" onclick="myFunction()">
                    <input type="reset" name="reset" value="Clear" style="width:100px;">
            
                </form>
                
            
            
            </div>
            
            
            
        </header>
            
        <nav></nav>
           
        <section></section>
           
        <article></article>
            
        <footer></footer>
            
            
            
</body>
</html>
            