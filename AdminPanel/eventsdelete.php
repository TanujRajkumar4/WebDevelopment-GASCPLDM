<?php
include '../dbConnect.php';

$dept_id = $_GET['id'];
$result="";
try{

    $query="DELETE FROM events WHERE events_id='$dept_id'";
    $result = $db->exec($query);
    echo $result;
}
catch(Exception $e){
    //echo "<script>alert('$e->getMessage()')</script>";    
        echo "<script>alert('Error in Deleting the Department... Please note that a Department cannot be deleted if any courses or faculty are associated with the department. Please delete them before deleting the department.');
        window.location.href = 'events.php';</script>";
        
    
}
if($result)
{
    echo "<script>alert('Event Deleted Successfully');
    window.location.href = 'events.php';</script>";
}



?>
