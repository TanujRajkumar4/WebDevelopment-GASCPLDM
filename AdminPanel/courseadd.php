<?php
// include("../dbConnect.php");
include("header.php");
include('./dbConnect.php');

$Name=addslashes($_POST['Name']);
$Overview=$_POST['Overview'];
$Description=addslashes($_POST['Description']);
$Dept_ID=addslashes($_POST['Dept_ID']);

$query = "INSERT INTO Course (CourseName,CourseOverview,CourseDescription,Dept_ID) VALUES ('$Name','$Overview','$Description','$Dept_ID')";
$result = $db->exec($query);
echo $result;
 if($result){
				echo "<script>alert('Inserted Successfully');window.location.href = 'Course.php';</script>";
			}else{
				echo "<script>alert('Not Inserted');window.location.href = 'Course.php';</script>";
			}
?>