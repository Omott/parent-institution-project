<!DOCTYPE html>
<html  lang="en-US">
<head>
<title>Staff Dashboard</title>
<meta charset= "utf-8">
<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
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
	<form>
		<input type="text" name="heading" placeholder="Subject/Title">
		<br><br>
		<label>Type the message below:</label>
		<textarea name="info" rows="25" cols="25" maxlength="290" wrap="hard">
				
		</textarea>
		<br><br>
		<input type="submit" value="Send" name="notifications" style="width:100px;">
		<input type="reset" value="Clear" name="notifications" style="width:100px;">

	</form>
	


  </div>



</header>

<nav></nav>

<section></section>

<article></article>

<footer></footer>



</body>
</html>
