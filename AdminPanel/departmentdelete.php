<?php
include '../dbConnect.php';
$type=$_GET['type'];
$dept_id = $_GET['id'];
$query="DELETE FROM department WHERE Dept_ID='$dept_id'";
$result = $db->exec($query);
echo $result;
if($result)

{
	echo "<script>alert('Department Deleted Successfully');
    window.location.href = 'department.php?type=".$type."';</script>".$_GET['id'];
}
else{
echo "<script>alert('Error in Deleting the Department');
    window.location.href = 'department.php?type=".$type."';</script>";
}



?>