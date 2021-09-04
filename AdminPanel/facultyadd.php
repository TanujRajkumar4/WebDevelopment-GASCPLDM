<?php
include("./dbConnect.php");
$type=$_GET['type'];
$Name=addslashes($_POST['Name']);
$Overview=$_POST['Overview'];
$Description=addslashes($_POST['Description']);
// $content=addslashes($_POST['content']);
// $prgm=addslashes($_POST['program']);
// $map=addslashes($_POST['map']);



if ($type =='E')
{
	$title="event";
}
elseif($type== 'N')
{
	$title= "news";
	}
	elseif($type == 'Ex')
	{
		$title="excursion";
	}
//Uploading images

$ii="";
$extensions = array("jpeg","jpg","png");
foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){

$file_ext=explode('.',$_FILES['files']['name'][$key])	;
$file_ext=end($file_ext);  
$file_ext=strtolower(end(explode('.',$_FILES['files']['name'][$key])));  
if(in_array($file_ext,$extensions ) === false){
	echo "<script>alert('Upload only jpg and png images');
    window.location.href = 'news.php?type=".$type."';</script>";
} 

    $file_name=time().$x.'sc.'.$file_ext;
    $proimg = "../".$title."/".$file_name;
    $ii=$ii.",".$proimg;
	if(!move_uploaded_file($_FILES['files']['tmp_name'][$key], $proimg)){
    
    	echo "<script>alert('Image uploaded error');</script>";
		echo "<script>window.location.href = 'news.php?type=".$type."';</script>";
    }
    
    $x=$x+1;
}		



$query = "INSERT INTO department (Dept_Name,Dept_Overview,Dept_Description) VALUES ('$Name','$Overview','$Description')";
$result = $db->exec($query);


echo $result;

 if($result){
				echo "<script>alert('Inserted Successfully');window.location.href = 'news.php?type=".$type."';</script>";
			}else{
				echo "<script>alert('Not Inserted');window.location.href = 'news.php?type=".$type."';</script>";
			}

?>