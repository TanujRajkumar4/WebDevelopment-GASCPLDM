<?php
include './dbConnect.php';
$content=addslashes($_POST['content']);
echo $content;

$query = "UPDATE page SET page_content='$content' WHERE page_id='$_GET[id]'";
$sql=$db->exec($query);

echo $sql;

 
  if($sql){
				echo "<script>alert(' Updated Successfully');window.location.href = 'page.php';</script>";
			}else{
				echo "<script>alert('Not Updated');window.location.href = 'page.php';</script>";
			}
 



?>