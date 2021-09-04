<?php
include("../dbConnect.php");
$type=$_GET['type'];
$Name=addslashes($_POST['Name']);
$Overview=$_POST['Overview'];
$Description=addslashes($_POST['Description']);

if($type== 'N'){$title= "Department";}
$query = "INSERT INTO department (Dept_Name,Dept_Overview,Dept_Description) VALUES ('$Name','$Overview','$Description')";
$result = $db->exec($query);
echo $result;
 if($result){
				echo "<script>alert('Inserted Successfully');window.location.href = 'department.php?type=".$type."';</script>";
			}else{
				echo "<script>alert('Not Inserted');window.location.href = 'department.php?type=".$type."';</script>";
			}
?>