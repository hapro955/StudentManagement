<?php 

	include('../studentController.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="http://thuctapphp.com/StudentManagement/index.php?controller=addStudent" >Add student</a>
<table border="1px">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Status</th>
	</tr>
	<?php
	$student = new studentController();
	$query = $student->getDanhsach();
	while ($row=mysqli_fetch_assoc($query)) {	
	?>
	<tr>
		<td><?php echo $row['studentId'];?></td>
		<td><?php echo $row['studentName'];?></td>
		<td><?php echo $row['studentStatus'];?></td>
		<!-- <td><a href="http://thuctapphp.com/QuanLiSinhVienMVC/index.php?controller= studentEditStudent?studentId=<?php echo $row['studentId']; ?>">Edit |</a><a href="http://thuctapphp.com/QuanLiSinhVienMVC/index.php?controller=sudentDeleteStudent?studentId=<?php echo $row['studentId']; ?>">Delete</a></td>	 -->	
	</tr>
	<?php
			}
	?>
</table>
</body>
</html>
