<?php 
	include 'connection.php';


	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$passwd=$_POST['passwd'];

		$ins = "insert into stud(sname,semail,spasswd) values('$name','$email','$passwd')";

		mysqli_query($con,$ins);
		
		if($ins)
		{
			header("location:view_student.php");
		}
	}
?>
