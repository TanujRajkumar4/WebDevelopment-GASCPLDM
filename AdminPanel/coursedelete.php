<?php
include '../dbConnect.php';

$Courseid = $_GET['id'];
$result="";
try{

    $query="DELETE FROM course WHERE CourseID='$Courseid'";
    $result = $db->exec($query);
    echo $result;
}
catch(Exception $e){
    //echo "<script>alert('$e->getMessage()')</script>";    
        echo "<script>alert('Error in Deleting the course... Please note that a course cannot be deleted if any courses or faculty are associated with the course. Please delete them before deleting the course.');
        window.location.href = 'course.php';</script>";
        
    
}
if($result)
{
    echo "<script>alert('course Deleted Successfully');
    window.location.href = 'course.php';</script>";
}



?>