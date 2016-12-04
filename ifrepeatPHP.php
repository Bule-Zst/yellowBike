<?php 
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	$bikeNumber = $_POST['bikeNumber'];
	if( !is_numeric($bikeNumber) ){
		echo 'bikeNumber must be the number!';
		return;
	}
	$number = strlen(floor($bikeNumber));
	if( !( $number == 5 || $number == 6 ) ){
		echo 'bikeNumber must be 5 or 6 number!';
		return;
	}
	$con = mysqli_connect( "localhost", "root", "" );
	mysqli_select_db( $con, "zst_yellow_bike" );
	mysqli_set_charset( $con, "utf8" );
	$sql = "select bikeNumber from information where bikeNumber = '$bikeNumber'";
	$result = mysqli_query( $con, $sql);
	$test = mysqli_fetch_array($result);
	if( $test['bikeNumber'] != '' ){
		echo '1';
		return;
	}
	else{
		echo '2';
		return;
	}

 ?>