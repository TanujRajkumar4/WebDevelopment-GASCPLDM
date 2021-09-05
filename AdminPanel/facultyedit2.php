<?php
include("../dbConnect.php");

$Name=addslashes($_POST['Name']);
$Overview=$_POST['Overview'];
$Designation=addslashes($_POST['Designation']);
$Qualification=addslashes($_POST['Qualification']);
$Dept_ID=addslashes($_POST['Dept_ID']);
$title= "Faculty";
$query = "UPDATE Faculty SET FacultyName='$Name',FacultyOverview='$Overview',FacultyDesignation='$Designation',FacultyQualification='$Qualification',Dept_ID='$Dept_ID' WHERE FacultyID='$_GET[id]'";
$result = $db->exec($query);
echo $result; 
  if($result){
				echo "<script>alert(' Updated Successfully');window.location.href = 'Faculty.php';</script>";
			}else{
				echo "<script>alert('Not Updated');window.location.href = 'Faculty.php';</script>";
			}


?>