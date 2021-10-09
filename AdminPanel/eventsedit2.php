<?php
include("../dbConnect.php");
$eve_id=$_GET['id'];
$eve_Name=addslashes($_POST['eve_Name']);
$eve_date=addslashes($_POST['eve_date']);
$eve_desc=addslashes($_POST['Description']);
$ii="../".$_POST['eve_pt_url'];
$x=1;
$index = 0;
if(isset($_FILES['eve_phot']['name']) && ($_FILES['eve_phot']['name'] != ""))
    {       
        unlink($ii);
        $extensions = array("jpeg","jpg","png","bmp","gif");
        $file_ext=explode('.',$_FILES['eve_phot']['name']);
        $file_ext=end($file_ext);  
        $file_ext=strtolower($file_ext);  
        if(in_array($file_ext,$extensions) === false)
        {
            echo "<script>alert('Please Upload images only ');
            window.location.href = 'eventsedit.php?id=".$eve_id."';</script>";
            exit;
        }
        $file_size = $_FILES['eve_phot']['size'];
        if (($file_size > 50*1024*1024)){      
        echo "<script>alert('File too large. File must be less than 50 MB.');
        window.location.href = 'eventsedit.php?id=".$eve_id."';</script>"; 
        }
        $file_name=time().$x.'sc.'.$file_ext;
        $proimg = "../img/events/".$file_name;
        if(!move_uploaded_file($_FILES['eve_phot']['tmp_name'], $proimg))
        {
            $ii="";
            echo "<script>alert('Image uploaded Failed. Try After Sometimes');</script>";
            //echo "<script>window.location.href = 'eventsedit.php?id=".$eve_id."';</script>";
        }
        else
        {
            $ii=$proimg;
                    
        }
    }
    $query = "UPDATE `events` SET `events_title`='$eve_Name', `events_desc`='$eve_desc', `events_date`='$eve_date', `events_photo`='$ii' where `events_id`='$eve_id' and `events_status` ='A'";
    $result = $db->exec($query);
    //echo $result;
    if($result)
    {
        echo "<script>alert('Updated Successfully');window.location.href = 'eventsedit.php?id=".$eve_id."';</script>";
    }
    else{
        echo "<script>alert('Not Updated');window.location.href = 'eventsedit.php?id=".$eve_id."';</script>";
    }

?>