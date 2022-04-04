<?php 


session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}


	if(isset($_SESSION['username'])){ 
		echo 'welcome' . $_SESSION['username'] . '<br>';
	}
	 
?>
<!DOCTYPE html>
<html>
<head>
	<title>SpaceMan! homepage</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles2.css">
</head>
<div class="center">
    <p>Welcome to SpaceMan!</p>
</div>
<p>Welcome to index</p>
<div class="planet_picture">
    <img src="img/spaceship1.png" alt="spaceship1" width="300" height="300">
</div>



<a href="index.php?logout=true">Logout</a>

</html>