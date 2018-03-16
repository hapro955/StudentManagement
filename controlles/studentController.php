<?php 
	include_once ('../models/studentModel.php');
	include_once('../view/editStudent.php');
	class StudentController{
		function getSua($id){
			$std=new Student();
			$giatri=$std->editStudent($id);
			header('Location:editStudent.php');
		}
		function postSua(){
			if(isset($_GET['studentId']) $$filter_var($_GET['studentId'],FILTER_VALIDATE_INT,array('min_range'=>1)))
	 		{
	 			$studentId=$_GET['$studentId'];
	 		}
	 		else
	 		{
	 			echo "failed";
	 		}
	 		if($_SERVER['REQUEST_METHOD']=='POST')
	 		{
	 			$name=$_POST['name'];
	 			$status=$_POST['status'];
	 			$std=new Student();
	 			$sql=$std->editStudent();
	}
?>