<?php
class database{
	var $conn = '';
function database(){ 
	$this->$conn=mysqli_connect('thuctapphp.com','root','root','thuctapPHP');
	return $this->conn;
}
?>