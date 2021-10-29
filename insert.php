<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => mobolaji
		$conn = mysqli_connect("localhost", "root", "", "mobolaji");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$message = $_REQUEST['message'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO mobolaji VALUES ('$name',
			'$email','$message')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Thanks for contacting us!, our Team will respond to 
			you as soon as possible";
			
			echo nl2br "Mr."("\n$name\n");

						} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
