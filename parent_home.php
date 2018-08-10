<?php
session_start();
    if (!(isset($_SESSION['u_first']))){
        header('location:parent_login.php');

    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Parent Section</title>
	<meta charset="utf-8" lang="en-US">
	<style>
		*{
			box-sizing: border-box;
			
		}
		
		.content{
			/*background = gradient + image pattern combo*/
			background-color:rgba(110,200,110,0.5);
			max-width: 750px;
			height:600px;
			margin: auto;
			padding-top: 50px;
			text-align: center;
		}
		
		button{
			margin:5px;
			width: px;
			height: px;
			font-weight:;
			font-size: 16px;
			cursor: pointer;
		}
		a{
			text-decoration: none;
			color: inherit;
		}
		.side{
			width:210px;
			height:200px;
			border:2px solid black;
			border-radius:5px;
			padding-left:5px;
			position:absolute;
			margin-left:525px;
			margin-top:21px;
		}

		.message{
			margin-top:55px;
		}
	</style>
</head>
<body>
		<div class="content">
		<div><?php echo '<span>Welcome,</span>'. ' '.$_SESSION['u_first'].' '.$_SESSION['u_last']?> <span><button><a href="">Home</a></button></span><span><button><a href="include/logout.inc.php">Logout</a></button></span></div>
		<!-- <div class="side">
		<h3 style="text-decoration:underline;">Latest Information</h3>
	    </div> -->
		<div class="big_box">
            <h3>Click to view <button><a href="documents/academic-calendar.pdf" alt="school calendar">Academic Calendar</a></button></h3>
        </div>
		<div>
			<h3>Other information:</h3>
			<div>
				<a href=""><button>Student Results</button></a>
				<a href=""><button>Student Attendance</button></a>
				<a href=""><button>Wallet/Payment Details</button></a>				
			</div>
		</div>
		<!-- Message section -->

		<div class="message">
			<h3>Send/Receive Messages</h3>
			<a href="enquiry.php"><button>Enquiries/Complaints</button></a>
			<a href="viewmsg.php"><button>View Messages</button></a>

		</div>
		
	</div>

	
</body>
</html>
<?php
include 'footer.inc.php';
?>
