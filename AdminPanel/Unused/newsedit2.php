<?php
include("./dbConnect.php");
$type=$_GET['type'];
$Name=addslashes($_POST['Name']);
$Overview=$_POST['Overview'];
$Description=addslashes($_POST['Description']);

if($type== 'N'){$title= "Department";}
$query = "UPDATE eve SET news_title='$header',news_date='$e_date',news_desc='$content',place='$place',progm='$prgm',map='$map' WHERE news_id='$_GET[id]'";
$result = $db->exec($query);
echo $result;


 
  if($result){
				echo "<script>alert(' Updated Successfully');window.location.href = 'news.php?type=".$type."';</script>";
			}else{
				echo "<script>alert('Not Updated');window.location.href = 'news.php?type=".$type."';</script>";
			}


?>