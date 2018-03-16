<?php 
 include ('../librali/connect.php');
 class Student {
 	function listStudent(){

 	}
 	function editStudent($id){
 			$sqlEdit= "UPDATE student SET studentName='$name',studentStatus='$status' WHERE studentId='$id'";
 			mysqli_query($this->$conn,$sqlEdit);
 		}
 	}

 }