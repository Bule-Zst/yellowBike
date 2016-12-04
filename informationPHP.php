<?php 
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	$bikeNumber = $_POST['bikeNumber'];
	$password = $_POST['password'];
	if( !is_numeric($bikeNumber) ){
		echo 'bikeNumber must be the number!';
		return;
	}
	if( !is_numeric($password) ){
		echo 'password must be number!';
		return;
	}
	$number = strlen(floor($bikeNumber));
	if( !( $number == 5 || $number == 6 ) ){
		echo 'bikeNumber must be 5 or 6 number!';
		return;
	}
	$number = strlen(floor($password));
	if( $number != 4 ){
		echo 'password must be 4 number!';
		return;
	}
	$con = mysqli_connect( "localhost", "root", "" );
	mysqli_select_db( $con, "zst_yellow_bike" );
	mysqli_set_charset( $con, "utf8" );
	$sql = "INSERT INTO information (bikeNumber, password) VALUES ('$bikeNumber', '$password')";
	if( mysqli_query( $con, $sql )){
		echo '1';
		return;
	}
	else{
		$sql = "UPDATE information SET password = '$password' WHERE bikeNumber = '$bikeNumber'";
		if( mysqli_query( $con,$sql ) ){
			echo '2';
			return;
		}
	}
 ?>