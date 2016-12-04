<?php 
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$con = mysqli_connect( "localhost", "root", "" );
	mysqli_select_db( $con, "zst_yellow_bike" );
	mysqli_set_charset( $con, "utf8" );
	$sql = "select password from register where username = '$username'";
	$result = mysqli_query( $con, $sql );
	$test = mysqli_fetch_array( $result );
	if( $test['password'] == $password ){
		echo '1';
		$_SESSION['login'] = '1';
	}

 ?>

	