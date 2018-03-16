<?php 
 include ('../librali/connect.php');
 class Student extends database {
 	function editStudent($id){
 	$sqlEdit= "UPDATE student SET studentName='$name',studentStatus='$status' WHERE studentId='$id'";
 	mysqli_query($this->$conn,$sqlEdit);

 	}
 	function listStudent(){
 		$sql = "SELECT * FROM student WHERE studentStatus=1";
			$result = mysqli_query($this->conn,$sql);
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					$data[] = $row;
				}
			}else{
				$data = array();			
			}
		return $data;
 	}
 	function addStudent(){
 		$sql="INSERT INTO student(studentName,studentStatus) VALUES('$name','$status')";
 		$resurt=mysql_query($this-<$conn,$sql);
 	}
 	function deleteStudent(){
		$conn = mysqli_connect("thuctapphp.com", "root", "root", "thuctapPHP");
		if(isset($_GET['id'])){
		$id =$_GET['id'];
		$sql = "UPDATE student SET studentStatus=0 WHERE studentId='$id'";
		mysqli_query($sql);
		header("location:list.php");
	}
	
 	}

 }