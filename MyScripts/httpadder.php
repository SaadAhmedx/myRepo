<?php
error_reporting(0);

if(isset($_POST['userInput'])&&!empty($_POST['userInput'])){

	$UserInput = $_POST['userInput'];

	$exp = explode("\n", $UserInput);

	
	echo "<title>Http Adder :: Injector(PCA)</title>";
	echo "<center><h1 style='text-shadow: black 0px 0px 5px'>~ Http Adder By Injector(PCA) ~</h1></center>";
	echo "<center><h3 style='text-shadow: black 0px 0px 5px'>Total Domain ~ <b style='text-shadow: red 0px 0px 5px; color:red'>".sizeof($exp)."</b></h3>";

	echo "<textarea rows='20' cols='80' >"; for($i = 0 ; $i < count($exp) ; $i++){ print_r('http://www.'.$exp[$i]);  } echo"</textarea>"; 
	die();
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Http Adder :: Injector(PCA)</title>
</head>
<body>

	<center>
		<form method="POST">
			<center><h1 style='text-shadow: black 0px 0px 5px'>~ Http Adder :: Injector(PCA) ~</h1></center><br>
			<textarea rows="20" cols="80" name="userInput"></textarea><br><br>
			<input type="submit" value=">>">
		</form>
	</center>

</body>
</html>

