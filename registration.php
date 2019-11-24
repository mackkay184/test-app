<?php 

session_start();
header('location:complete.php');

$connection = mysqli_connect('localhost', 'root', '', 'user_registration');
if(mysqli_connect_error($connection)){
	echo 'Error connecting to database user_registration';
}else{
	// procceed with connection variable
	$firstname 	= $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname 	= $_POST['lastname'];
	$address 	= $_POST['address'];
	$email 		= $_POST['email'];
	$phone 		= $_POST['phone'];
	$password 	= $_POST['password'];

	$reg = "insert into usertable(firstname, middlename, lastname, address, email, phone, password) values('$firstname','$middlename', '$lastname', '$address', '$email', '$phone', '$password')";

	if(mysqli_query($connection, $reg)){
		echo 'Registration Successful';
	}else{
		echo 'Error creating user \n ';
		echo mysqli_error($connection);
	}
}
