<?php
include '../dbConnect.php';

$Facultyid = $_GET['id'];
$result="";
try{

    $query="DELETE FROM Faculty WHERE FacultyID='$Facultyid'";
    $result = $db->exec($query);
    echo $result;
}
catch(Exception $e){
    //echo "<script>alert('$e->getMessage()')</script>";    
        echo "<script>alert('Error in Deleting the Faculty... Please note that a Faculty cannot be deleted if any Facultys or faculty are associated with the Faculty. Please delete them before deleting the Faculty.');
        window.location.href = 'Faculty.php';</script>";
        
    
}
if($result)
{
    echo "<script>alert('Faculty Deleted Successfully');
    window.location.href = 'Faculty.php';</script>";
}



?>