<?php

$con =  mysqli_connect('localhost','root');
if($con){
	echo "connection successfull";
}else{
	echo "no connection";
}


mysqli_select_db($con,'namedata');
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$query = " insert into detailsinfo (name,email,message)
values('$name','$email','$message')";

mysqli_query($con, $query);


echo "$query";

mysqli_query($con,' $query');


header('location:contact.html');

?>
