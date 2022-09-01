<?php
if(isset($_POST['string']))
{
	$v1=$_POST['string'];
	$v2="@%^&*(){}><?";
	$pass=$v1.$v2;
	for($i=0;$i<10;$i++)
	{
	  $pass=str_shuffle($pass);
	}
	echo $pass;
}
?>
<br/>
<form name="form1" action="index.php" method="POST" bgcolor="green">
	Enter Your String Here:<input type="text" name="string"/><br/><br/>
	<input type="submit"value="I am Done,GO"/>
</form>