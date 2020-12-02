<?php 
	include 'connection.php';
	$qry="select * from stud";
	$res=mysqli_query($con,$qry);
?>
<!DOCTYPE html>
<html>
<head>
	<title>view data</title>
</head>
<body>
	<div>
		<h1>Student data</h1>
		<table border="2" cellpadding="2" cellspacing="2">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Password</th>
			</tr>

			<?php 
				while($data=mysqli_fetch_assoc($res))
				{
			?>
			<tr>
				<td><?php echo $data['sid']; ?></td>
				<td><?php echo $data['sname']; ?></td>
				<td><?php echo $data['semail']; ?></td>
				<td><?php echo md5($data['spasswd']); ?></td>
			</tr>
		<?php } ?>
		</table>
	</div>
</body>
</html>
