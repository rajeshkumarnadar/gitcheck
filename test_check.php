<?php
if(isset($_POST['submit']))
{
	$check=$_POST['raj'];
	foreach($check as $key => $value )
	{
		print_r($check[$key]);

	}
}


?>

<html>
	<head>
		
		
	</head>
	<body>
<form action="test_check.php" method="post" name="testfrm">
	
		<select name="raj[]">
			<option value=1 >yes</option>
			<option value=0 >No</option>
		</select>
		<select name="raj[]">
			<option value=1 >yes</option>
			<option value=0 >No</option>
		</select>
		<select name="raj[]">
			<option value=1 >yes</option>
			<option value=0 >No</option>
		</select>
		<select name="raj[]">
			<option value=1 >yes</option>
			<option value=0 >No</option>
		</select>
	<input type="submit" name="submit" value="submit" >
		</form>		
	</body>
</html>