<?php
$header=addslashes($_POST['header']);
//Uploading images

$ii="";
$extensions = array("jpeg","jpg","png");
foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){

$file_ext=explode('.',$_FILES['files']['name'][$key])	;
$file_ext=end($file_ext);  
$file_ext=strtolower(end(explode('.',$_FILES['files']['name'][$key])));  
if(in_array($file_ext,$extensions ) === false){
	echo "<script>alert('Upload only jpg and png images');
    window.location.href = 'gallery.php';</script>";
} 

    $file_name=time().$x.'sc.'.$file_ext;
    $proimg = "../imges".$title."/".$file_name;
    $ii=$ii.",".$proimg;
	if(!move_uploaded_file($_FILES['files']['tmp_name'][$key], $proimg)){
    
    	echo "<script>alert('Image uploaded error');</script>";
		echo "<script>window.location.href = 'gallery.php';</script>";
    }
    
    $x=$x+1;
}		

include 'db.php';

$sql=mysqli_query($con,"INSERT INTO gallery (photo_title,gallery)VALUES ('$header','$ii')");

echo $sql;

 if($sql){
				echo "<script>alert('Inserted Successfully');window.location.href = 'gallery.php';</script>";
			}else{
				echo "<script>alert('Not Inserted');window.location.href = 'gallery.php';</script>";
			}

?>