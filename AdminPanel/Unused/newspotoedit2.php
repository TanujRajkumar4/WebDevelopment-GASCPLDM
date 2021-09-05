<?PHP
include 'db.php';
$type=$_GET['type'];
if($type == 'N')
{
	$title="NEWS";
}
elseif($type == 'E')
{
	$title="Events";
}
elseif($type == 'Ex')
{
	$title="Excursion";
}

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
$sql=mysqli_query($con,"UPDATE eve SET news_photo='$ii' WHERE news_id='$_GET[id]'");

 
  if($sql){
				echo "<script>alert('Inserted Successfully');window.location.href = 'news.php?type=".$type."';</script>";
			}else{
				echo "<script>alert('Not Inserted');window.location.href = 'news.php?type=".$type."';</script>";
			}
?>