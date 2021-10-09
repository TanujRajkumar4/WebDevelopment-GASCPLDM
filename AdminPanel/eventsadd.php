<?php
include("../dbConnect.php");
$eve_Name=addslashes($_POST['eve_Name']);
$eve_date=addslashes($_POST['eve_date']);
$eve_desc=addslashes($_POST['Description']);
$x=1;
$ii="";
$index = 0;
if(isset($_FILES['eve_phot']['name']) && ($_FILES['eve_phot']['name'] != ""))
    {       
        $extensions = array("jpeg","jpg","png","bmp","gif");
        $file_ext=explode('.',$_FILES['eve_phot']['name']);
        $file_ext=end($file_ext);  
        $file_ext=strtolower($file_ext);  
        if(in_array($file_ext,$extensions) === false)
        {
            echo "<script>alert('Please Upload images only ');
            window.location.href = 'events.php';</script>";
            exit;
        }
        $file_size = $_FILES['eve_phot']['size'];
        if (($file_size > 50*1024*1024)){      
        echo "<script>alert('File too large. File must be less than 50 MB.');
        window.location.href = 'events.php';</script>"; 
        }
        $file_name=time().$x.'sc.'.$file_ext;
        $proimg = "../img/events/".$file_name;
        if(!move_uploaded_file($_FILES['eve_phot']['tmp_name'], $proimg))
        {
            $ii="";
            echo "<script>alert('Image uploaded Failed. Try After Sometimes');</script>";
            echo "<script>window.location.href = 'events.php';</script>";
        }
        else
        {
            $ii=$proimg;
            $query = "INSERT INTO `events`(`events_id`, `events_title`, `events_desc`, `events_date`, `events_photo`, `events_status`)VALUES ('','$eve_Name','$eve_desc','$eve_date','$ii','A')";
            $result = $db->exec($query);
            echo $result;
        if($result)
            {
                echo "<script>alert('Inserted Successfully');window.location.href = 'events.php';</script>";
            }
        else{
                echo "<script>alert('Not Inserted');window.location.href = 'events.php';</script>";
            }
        
        }
    }
?>