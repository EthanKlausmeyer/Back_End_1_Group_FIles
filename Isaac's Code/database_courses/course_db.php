<?php
function get_course(){
global $db;
$query = 'SELECT * FROM courses ORDER BY CourseID';
$statement = $db->prepare($query);
$statement->execute();
$courses = $statement->fetchAll();
$statement->closeCursor();
return $courses;
}

function delete_course($course_id){
global $db;
$query = "DELETE FROM courses WHERE CourseID = :course_id";
$statement = $db->prepare($query);
$statement->bindValue(':course_id', $course_id);
$statement->execute();
$statement->closeCursor();
}

function get_course_name($course_id){

if(!$course_id){
    return "All Course";
}
global $db;
$query = 'SELECT * FROM courses WHERE CourseID = :course_id';
$statement = $db->prepare($query);
$statement->bindValue(':course_id', $course_id);
$statement->execute();
$course = $statement->fetch();
$statement->closeCursor();
$course_name = $course['course_name'];
return $course_name;

}

function add_course(){
global $db;
$query = 'INSERT INTO courses (CourseName) VALUES (:course_name)';
}
?>