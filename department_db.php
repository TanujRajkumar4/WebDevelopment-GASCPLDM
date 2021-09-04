<?php

function getDeptName($dept_id){
    global $db;    
    $query = "SELECT * FROM department
              WHERE Dept_ID = '$dept_id'";
    $result = $db->query($query);
    $result = $result->fetch();
    //var_dump($result);
    $dept_Name=$result["Dept_Name"];
    return $dept_Name;
}

function getDeptDetails($dept_id){
    global $db;    
    $query = "SELECT * FROM department
              WHERE Dept_ID = '$dept_id'";
    $result = $db->query($query);
    $result = $result->fetch();
    //var_dump($result);    
    return $result;
}

function getCourseList($dept_id){
    global $db;
    $query = "SELECT * FROM course
              WHERE Dept_ID = '$dept_id'";
    $result = $db->query($query);
    //$result = $result->fetch();
    //var_dump($result);    
    return $result;
}

function getFacultyList($dept_id){
    global $db;
    $query = "SELECT * FROM faculty
              WHERE Dept_ID = '$dept_id'";
    $result = $db->query($query);
    //$result = $result->fetch();
    //var_dump($result);    
    return $result;
}

?>