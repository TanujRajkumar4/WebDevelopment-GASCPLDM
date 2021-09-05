<?php
include 'db.php';
$type=$_GET['type'];
$sql="DELETE FROM eve WHERE news_id='$_GET[id]'";
if(mysqli_query($con,$sql))

{
	echo "<script>alert('Record Deleted Successfully');
    window.location.href = 'news.php?type=".$type."';</script>";
}
else{
echo "<script>alert('Error in Deleting the record');
    window.location.href = 'news.php?type=".$type."';</script>";
}



?>