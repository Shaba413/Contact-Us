<?php
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];
echo $name;
echo $email;
echo $number;
echo $message;
$link=mysqli_connect("localhost","root","","createform");
if($link==false){
    die("ERROR: could not connect. " . mysqli_connect_error());

}
$sql="INSERT INTO userInfo (fullName,emailAddress,contactNum,message) VALUES ('$name','$email','$number','$message')";
if(mysqli_query($link,$sql)){
    echo " Records added successfully.";

}
else{
    echo "ERROR: Could not able to execute $sql." . mysqli_error($link);

}
mysqli_close($link);
?>




    