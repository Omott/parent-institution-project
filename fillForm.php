<!DOCTYPE html>
<html>
<head>
<title>Registeration Form</title>
<link rel="stylesheet" type="text/css" href="regForm/regStyles.css">
<script src="/regForm/regScript.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

</head>
<body>

<script>
  function goback(){
    window.history();
  }
</script>


<input type="button"  class="action-button" value="Previous" onclick="goback()"/>
<!-- multistep form -->
<form id="msform" method="post" action="include/parent_form.inc.php">



  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Account Setup</li>
    <li>Personal Details</li>
  </ul>
   <fieldset>
  <h2 class="fs-title">Personal Details</h2>
  <h3 class="fs-subtitle">We will never sell it</h3>
  
  <input type="text" name="fname" placeholder="First Name" />
  <input type="text" name="lname" placeholder="Last Name" />
  <input type="text" name="phone" placeholder="Phone" />
  <textarea name="address" placeholder="Address"></textarea>
  
  <h2 class="fs-title">login details</h2>
  <h3 class="fs-subtitle">Last Step</h3>
  <input type="text" name="email" placeholder="Email" />
  <input type="password" name="pass" placeholder="Password" />
  <input type="password" name="cpass" placeholder="Confirm Password" />
  <input type="button" name="previous" class="previous action-button" value="Previous" />
  <input type="submit" name="submit" class="submit action-button" value="Submit" />
  </fieldset> 
  <?php 
  if (isset($_GET['reg'])) {
    if($_GET['reg'] == 'successful'){
      echo '<div class= "alert alert-success" role="alert"><p style="color:teal">Registration successful, You can now log in</p></div>';
     }
     else if($_GET['reg'] == 'failed'){
       echo '<div class= "alert alert-success" role="alert"><p style="color:red">Registration failed, Try Again</p></div>';
     }
  }
  
  
 ?>
  

</form>
</body>
</html>
