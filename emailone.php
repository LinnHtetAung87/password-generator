<!DOCTYPE html>
<?php
if (isset($_POST['submit'])) 
{
	$to=$_POST['temail'];
	if (!filter_var($to, FILTER_VALIDATE_EMAIL)) 
	{
		echo ("ENTER THE CORRECT EMAIL");
	}
	}
	else ($from=$_POST['femail'];
		if (!filter_var($to,FILTER_VALIDATE_EMAIL)) 
		{
			echo ("Enter the Correct Email");
		}
		else{
			$fname=$_POST['fname'];
			$lname=$_POST['fname'];
			$message=$fname.".$lname."\n".$_POST['message'];
			$message=wordwrap($message,70);
			$hearder="from".$from;
			$subject="from submission";
			mail($to, $subject, $message, $hearder);

	}
} }
}
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Untitled Document</title>
</head>
<body>
<form action="emailone.php" method="post">
	<table align="center">
		<tr><td>Name:</td>
			<input type="text" name="fname" placeholder="First Name">
			<input type="text" name="lname" placeholder="Last Name"></td><br><br>
		</tr>
		<tr>
			<td>To:</td>
			<td><input type="email" name="temail" placeholder="example@example.com"></td>
		</tr>
		<tr>
			<td>From:</td>
			<td><input type="email" name="femail" placeholder="example@example.com"></td>
		</tr>
		<tr>
			<td>Message</td>
			<td><textarea name="message" rows="5" cols="40" placeholder="Enter Your Message Here"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Send"></td>
		</tr>
	</table>
</form>
</body>
</html>