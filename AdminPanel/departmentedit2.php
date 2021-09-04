<?php
include("../dbConnect.php");

$Name=addslashes($_POST['Name']);
$Overview=$_POST['Overview'];
$Description=addslashes($_POST['Description']);

$title= "Department";
$query = "UPDATE department SET Dept_Name='$Name',Dept_OverView='$Overview',Dept_Description='$Description' WHERE Dept_ID='$_GET[id]'";
$result = $db->exec($query);
echo $result; 
  if($result){
				echo "<script>alert(' Updated Successfully');window.location.href = 'department.php';</script>";
			}else{
				echo "<script>alert('Not Updated');window.location.href = 'department.php';</script>";
			}


?>