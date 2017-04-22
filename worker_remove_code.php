<?php 
	$conn = mysqli_connect("localhost","root","","ifactory"); 
	
	  $w_id = $_GET['W_ID'];
	 
	 
	 $sql = "DELETE FROM Worker WHERE W_ID = '".$w_id."' ";
  	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error update record: " . $conn->error;
		}
	  
	  	 $sql = "DELETE FROM Skill_of_w WHERE W_ID = '".$w_id."' ";
  	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error update record: " . $conn->error;
		}
		header("Location: worker.php") ;
 ?>
 
 