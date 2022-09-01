<?php
if (isset($_POST['gen'])) {
	$result='';
	if (isset($_POST['chkone'])) {
		PassGenerator(100);// code...
	}
	else if (isset($_POST['chktwo'])) {
		PassGenerator(1000);// code...
	}
	else if (isset($_POST['chkthree'])) {
		PassGenerator(10000);// code...
	}
	else {
		PassGenerator(8);// code...
	}	
}
	function PassGenerator($len){
	global $result;

	$ValidChar='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()~';
	while (0<$len--) {
		$result.=$ValidChar[random_int(0, strlen($ValidChar)-1)];// code...
	}
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body> 
<table align="center">
	<tr>
		<td><h1>Password Generator</h1></td>
	</tr>
	<tr>
		<td><form class="" action="" method="post">
			<input type="text" name="result" value="<?php echo($result);?>"><br>
			<input type="checkbox" name="chkone" value="100">100 Character <br> 
			<input type="checkbox" name="chktwo" value="1000">1000 Character <br> 
			<input type="checkbox" name="chkthree" value="10000">10000 Character <br> 
			<input type="submit" name="gen" value="Generate"> 
		</form></td>
	</tr>
</table>
</body>
</html>