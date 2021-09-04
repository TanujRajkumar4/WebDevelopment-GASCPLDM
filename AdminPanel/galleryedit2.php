<?php
include 'db.php';

$type=$_GET['type'];
$header=addslashes($_POST['header']);
$e_date=$_POST['e_date'];
$place=addslashes($_POST['place']);
$content=addslashes($_POST['content']);
$prgm=addslashes($_POST['program']);
$map=addslashes($_POST['map']);


$sql=mysqli_query($con,"UPDATE eve SET news_title='$header',news_date='$e_date',news_desc='$content',place='$place',progm='$prgm',map='$map' WHERE news_id='$_GET[id]'");

 
  if($sql){
				echo "<script>alert(' Updated Successfully');window.location.href = 'news.php?type=".$type."';</script>";
			}else{
				echo "<script>alert('Not Updated');window.location.href = 'news.php?type=".$type."';</script>";
			}


?>