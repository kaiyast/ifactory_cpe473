<?php 
	$conn = mysqli_connect("localhost","root","","ifactory"); 
	
	  $Color = $_POST['Color'];
	  $Wood = $_POST['Wood'];
	  $Mechanic = $_POST['Mechanic'];
	  $Decorate = $_POST['Decorate'];
	  $Packaging = $_POST['Packaging'];
	  $worker_id = $_GET['W_ID'];
	
	$sql = "UPDATE skill_of_w SET Point = '".$Color."' WHERE S_ID = '1' and W_ID ='".$worker_id."' ";
  	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error update record: " . $conn->error;
		}
		
	$sql = "UPDATE skill_of_w SET Point = '".$Wood."' WHERE S_ID = '2' and W_ID ='".$worker_id."' ";
  	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error update record: " . $conn->error;
		}	
	 $sql = "UPDATE skill_of_w SET Point = '".$Mechanic."' WHERE S_ID = '3' and W_ID ='".$worker_id."' ";
  	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error update record: " . $conn->error;
		} 
		
		$sql = "UPDATE skill_of_w SET Point = '".$Decorate."' WHERE S_ID = '4' and W_ID ='".$worker_id."' ";
  	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error update record: " . $conn->error;
		}
		
		$sql = "UPDATE skill_of_w SET Point = '".$Packaging."' WHERE S_ID = '5' and W_ID ='".$worker_id."' ";
  	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error update record: " . $conn->error;
		}
		header("Location: worker.php") ;
 ?>
 
 