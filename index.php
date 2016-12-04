<?php 
	error_reporting(E_ALL^E_NOTICE^E_WARNING);
	if( $_COOKIE['username'] != '' ){
		session_start();
		$_SESSION['login'] = '1';
		header('Location:http://www.bule007.cn/information.php');
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>
	username:<input id="username" type="text" placeholder="username">
	<br>
	password:<input id="password" type="password" placeholder="password"><input type="button" value="visible" onclick="visible()">
	<br>
	<input type="button" value="submit" onclick="submit()">
</body>
</html>
<script>
	function submit(){
		var username = document.getElementById('username').value
		var password = document.getElementById('password').value
		var xhr = new XMLHttpRequest();
		xhr.open( 'POST', 'indexPHP.php', true );
		xhr.setRequestHeader( 'Content-type', 'application/x-www-form-urlencoded' );
		xhr.onreadystatechange = function(){
			if( xhr.readyState == 4 && xhr.status == 200){
				var response = xhr.responseText
				if( response == 1 ){
					window.location.href = 'information.php'
				}
				else{
					alert('Password is wrong! or Username does not exist!')
				}
				
			}
		}
		xhr.send('username='+username+'&password='+password)
	}
	function visible(){
		document.getElementById('password').type = 'text'
	}
</script>