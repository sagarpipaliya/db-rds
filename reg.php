<?php 
	$con = mysqli_connect('studentdb.c9dqyjiw7mfq.us-east-1.rds.amazonaws.com','admin123','admin123','studentdb','3306');


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