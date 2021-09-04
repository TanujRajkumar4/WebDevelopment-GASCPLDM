<?php

function getCourseName($Course_ID){
    global $db;    
    $query = "SELECT * FROM course
              WHERE CourseID = '$Course_ID'";
    $result = $db->query($query);
    $result = $result->fetch();
    //var_dump($result);
    $Course_ID=$result["CourseName"];
    return $Course_ID;
}

function getCourseDetails($Course_ID){
    global $db;    
    $query = "SELECT * FROM course
              WHERE CourseID = '$Course_ID'";
    $result = $db->query($query);
    //$result = $result->fetch();
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