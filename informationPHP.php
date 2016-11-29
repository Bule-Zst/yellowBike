<?php 
	$bikeNumber = $_POST['bikeNumber'];
	$password = $_POST['password'];
	$con = mysqli_connect( "localhost", "root", "" );
	mysqli_select_db( $con, "yellow_bike" );
	mysqli_set_charset( $con, "utf8" );
	$sql = "INSERT INTO information (bikeNumber, password) VALUES ('$bikeNumber', '$password')";
	if( mysqli_query( $con, $sql )){
		echo '1';
	}
	else{
		$sql = "UPDATE information SET password = '$password' WHERE bikeNumber = '$bikeNumber'";
		if( mysqli_query( $con,$sql ) ){
			echo '2';
		}
	}
 ?>