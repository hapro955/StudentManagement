<?php 
	include_once ('../models/studentModel.php');
	class StudentController{
		function listStudent(){
			$list=new Student();
			$kq=$list->listStudent();
			return $kq;
		}
		function addStudent(){

		}
		function editStudent(){

		}
		function deleteStudent(){

		}
?>
