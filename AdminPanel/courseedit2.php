<?php
include("../dbConnect.php");

$Name=addslashes($_POST['Name']);
$Overview=$_POST['Overview'];
$Description=addslashes($_POST['Description']);

$title= "course";
$query = "UPDATE course SET CourseName='$Name',CourseOverview='$Overview',CourseDescription='$Description' WHERE CourseID='$_GET[id]'";
$result = $db->exec($query);
echo $result; 
  if($result){
				echo "<script>alert(' Updated Successfully');window.location.href = 'course.php';</script>";
			}else{
				echo "<script>alert('Not Updated');window.location.href = 'course.php';</script>";
			}


?>