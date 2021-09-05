<?php
include("../dbConnect.php");

$Name=addslashes($_POST['Name']);
$Overview=$_POST['Overview'];
$Designation=addslashes($_POST['Designation']);
$Dept_ID=addslashes($_POST['Dept_ID']);
$FacultyQualification=addslashes($_POST['Qualification']);


$query = "INSERT INTO Faculty (FacultyName,FacultyOverview,FacultyDesignation,Dept_ID,FacultyQualification) VALUES ('$Name','$Overview','$Designation','$Dept_ID','$FacultyQualification')";
$result = $db->exec($query);
echo $result;
 if($result){
				echo "<script>alert('Faculty Data Inserted Successfully');window.location.href = 'Faculty.php';</script>";
			}else{
				echo "<script>alert('Faculty Data NOT Inserted');window.location.href = 'Faculty.php';</script>";
			}
?>