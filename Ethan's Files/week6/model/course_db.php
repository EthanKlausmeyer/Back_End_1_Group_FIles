<?php

function get_courses(){
    global $db;
    $query = 'SELECT * FROM `courses` ORDER BY CourseID';
    $statement = $db-> prepare($query);
    $statement->execute();
    $courses = $statement->fetchALL();
    $statement->closeCursor();
    return $courses;
}
function get_course_name($course_id){
    global $db;
    if(!$course_id) {
        return "All Course";
    }
    $query = 'SELECT * FROM courses WHERE CourseID = :course_id';
    $statement = $db-> prepare($query);
    $statement->bindValue(':course_id', $course_id);
    $statement->execute();
    $course = $statement->fetch();
    $statement->closeCursor();
    $course_name = $course['courseName'];
    return $course_name;
}
function delete_course($course_id){
    global $db;
    $query = 'DELETE FROM `courses` WHERE CourseID = :course_id';
    $statement = $db-> prepare($query);
    $statement->bindValue(":course_id", $course_id);
    $statement->execute();
    $statement->closeCursor();
}
function add_course($course_name){
    global $db;
    $query = 'INSERT INTO `courses`(`CourseName`) VALUES (:course_name)';
    $statement = $db-> prepare($query);
    $statement->bindValue(":course_name", $course_name);
    $statement->execute();
    $statement->closeCursor();
}
?>