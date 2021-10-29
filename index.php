<html>
<title> must make Database This Night</title>
<head> Must make Database Tonight </head><br>
<br>


<?php echo "hello, yes you can Make it" ;
?>

<body>

    

            <h2>Registration Form</h2>

            <form action="insert.php" method="POST">

                 name:
                <input type="text" name="name">
                
                <br> email:
                <input type="text" name="email">
				
				 <br> message:
                <input type="text" name="message">
                
			<input type="hidden" name="form_submitted" value="1" />

               <br> <input type="submit" value="Submit">

            </form>

      
</body> 

</html>