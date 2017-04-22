<?php 
	$conn = mysqli_connect("localhost","root","","ifactory"); 
	
	  $name = $_POST['firstname']." ".$_POST['lastname'];
	  $Color = $_POST['Color'];
	  $Wood = $_POST['Wood'];
	  $Mechanic = $_POST['Mechanic'];
	  $Decorate = $_POST['Decorate'];
	  $Packaging = $_POST['Packaging'];
	  
	  $sql = "INSERT INTO Worker (W_Name) VALUES ('".$name."')";
	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $conn->error;
		}	
		
	$sql = "SELECT * FROM Worker WHERE W_Name = '".$name."'" ;
	$worker_id = 0 ;
	$result = mysqli_query($conn,$sql); 
	while($row = mysqli_fetch_array($result)) 
	{
		$worker_id = $row['W_ID'] ;
	}  
	  $sql = "INSERT INTO Skill_of_w (S_ID , Point , Rating , W_ID) VALUES ( 1,'".$Color."',0,'".$worker_id."')";
	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $conn->error;
		}
		
	  $sql = "INSERT INTO Skill_of_w (S_ID , Point , Rating , W_ID) VALUES ( 2,'".$Wood."',0,'".$worker_id."')";
	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $conn->error;
		}
		
		
	  $sql = "INSERT INTO Skill_of_w (S_ID , Point , Rating , W_ID) VALUES ( 3,'".$Mechanic."',0,'".$worker_id."')";
	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $conn->error;
		}
		
	  $sql = "INSERT INTO Skill_of_w (S_ID , Point , Rating , W_ID) VALUES ( 4,'".$Decorate."',0,'".$worker_id."')";
	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $conn->error;
		}
		
	  $sql = "INSERT INTO Skill_of_w (S_ID , Point , Rating , W_ID) VALUES ( 5,'".$Packaging."',0,'".$worker_id."')";
	if ($conn->query($sql) === TRUE) {
			echo "Record updated successfully";
		} else {
			echo "Error updating record: " . $conn->error;
		}
		
		header("Location: worker.php") ;
 ?>
 
 