


<h1>Login Form</h1>

<form action="" method="POST">

NAME:<input type="text" name="uname" id="uname">
<input type="submit" name="submit" id="submit" value="Submit" >

</form>

<?php


	if(isset($_POST['submit']))
{
	
	$uname=$_POST['uname'];
	echo "Name is :".$uname;
	
	
	$file = fopen( "demo.txt", 'w+' ); 
	
	fwrite($file, $uname); 

	fclose($file);
}
?>
