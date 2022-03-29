
<html>
<head>
<title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="adminer.css"/>
</head>

<body>

<div class="maindiv">

<div class="rightdiv">
<h1> Admin Panel</h1>

<table border="4" style="color:#FFFFFF; 
margin-top:40px;
margin: bottom 40px;
margin-left:-30px;
margin-right:10px; "cellpadding="1"   width="900" height="300"
 align="right">
<tr>
<th>Full Name</th>
<th>Email</th>
<th>Contact Number</th>
<th>Message</th>
</tr>
<?php
$host = "localhost";
$user = "root";
$pass="";
$db = "createform";
$con = mysqli_connect($host,$user,$pass,$db);

if(!$con){
	die("Could not connect" . mysqli_error());
}

mysqli_select_db($con,$db);
$sql = 'select * from  userinfo';
$x= mysqli_query($con,$sql);

if(!$x){
	die("Could not get data" . mysqli_error());
}

while ($y= mysqli_fetch_array($x))
{
?>
<tr>
	<td><?php echo $y[0]."<br/>"; ?></td>

	<td><?php echo $y[1]."<br/>"; ?></td>

	<td> <?php echo $y[2]."<br/>";  ?> </td>

	<td><?php echo $y[3]."<br/>";  ?></td>
	
	


</tr>

<?php
}
?>
</table>

</div>
</div>

</body></html>