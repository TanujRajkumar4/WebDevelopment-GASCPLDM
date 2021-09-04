<?php
include 'db.php';
$hd1=addslashes($_POST['header1']);
echo $hd1;
//para1='$cnt1',para_hed2='$hd2',para2='$cnt2',para_hed3='$hd3',para3='$cnt3',sing_line='$cnt4'

$sql=mysqli_query($con,"UPDATE pages SET page_content='$hd1' WHERE page_id='$_GET[id]'");

 
  if($sql){
				echo "<script>alert(' Updated Successfully');window.location.href = 'about.php';</script>";
			}else{
				echo "<script>alert('Not Updated');window.location.href = 'about.php';</script>";
			}
 



?>