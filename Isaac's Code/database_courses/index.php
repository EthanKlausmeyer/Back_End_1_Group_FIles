<?php
require('model/database.php');
require('model/assignment_db.php');
require('model/course_db.php');

$assignment_id = filter_input(INPUT_POST, 'assignment_id', FILTER_VALIDATE_INT);
$description = filter_input(INPUT_POST, 'description', FILTER_UNSAFE_RAW);
$course_name = filter_input(INPUT_POST, 'course_name', FILTER_UNSAFE_RAW);

$course_id = filter_input(INPUT_POST, 'course_id', FILTER_VALIDATE_INT);
if(!$course_id){
    $course_id = filter_input(INPUT_GET, 'course_id', FILTER_VALIDATE_INT);
}

$action = filter_input(INPUT_POST, 'action', FILTER_VALIDATE_INT);
if(!$action){
    $action = filter_input(INPUT_GET, 'action', FILTER_VALIDATE_INT);
    if(!$action){
        
    }
}
?>