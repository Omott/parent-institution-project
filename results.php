<!DOCTYPE html>
<html  lang="en-US">
<head>
<title>Staff Dashboard</title>
<meta charset= "utf-8">
<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
<style>
body{
	margin:55px;
}

header{
	padding:11px;
}
button{
	padding:10px;
	width:50%;
	border:5px solid white;
	border-radius:5px;
	display: inline;

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
	            <img id="profile-img" class="profile-img-card" src="images/fuo.png" alt="fountain logo" />
  <div>
	<table style="border: 2px solid black; width: 100%;">
		<thead>
		<tr>
			<th>S/N</th>
			<th>Course Title</th>
			<th>Course Code</th>

		</tr>
		</thead>
		<tbody>
		<tr>
				<td>1</td>
				<td>Introduction to Programming</td>
				<td>CPS 102</td>	
		</tr>
		<tr>
				<td>2</td>
				<td>Introduction to Algebra </td>
				<td>CPS 104</td>
		</tr>
		</tbody>
	</table>

	<br>
	<form method="POST" target="_blank" action="http://localhost/phpmyadmin/sql.php?server=1&db=parent_info&table=TABLE+1&pos=0">		
		<input type="file" value="Attach file" name="a-file"> <br> <br>
		<input type="submit" value="Send" name="p-name" style="width:25%; height: 30px; font-weight: bold; font-size: 20px;">
		<input type="reset" value="Clear" name="p-name" style="width:25%; height: 30px; font-weight: bold; font-size: 20px;">
	</form>
	
	


  </div>



</header>

<nav></nav>

<section></section>

<article></article>

<footer></footer>



</body>
</html>
