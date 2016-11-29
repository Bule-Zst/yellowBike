<?php 
	$username = $_POST['username'];
	$password = $_POST['password'];
	$con = mysqli_connect( "localhost", "root", "" );
	mysqli_select_db( $con, "yellow_bike" );
	mysqli_set_charset( $con, "utf8" );
	$sql = "select password from register where username = '$username'";
	$result = mysqli_query( $con, $sql );
	$test = mysqli_fetch_array( $result );
	if( $test['password'] == $password ){
		echo '1';
	}

 ?>

	