<?php
require("model/database.php");
require("model/assignment_db.php");
require("model/course_db.php");

$assignment_id = filter_input(INPUT_POST, "assignment_id", FILTER_VALIDATE_INT);
$description = filter_input(INPUT_POST, "description", FILTER_UNSAFE_RAW);
$course_name = filter_input(INPUT_POST, "course_name", FILTER_UNSAFE_RAW);

$course_id = filter_input(INPUT_POST, "course_id", FILTER_VALIDATE_INT);
if (!$course_id) {
    $course_id = filter_input(INPUT_GET, "course_id", FILTER_VALIDATE_INT);
}

$action = filter_input(INPUT_POST, "action", FILTER_UNSAFE_RAW);
if(!$action){
    $action = filter_input(INPUT_GET, "action", FILTER_UNSAFE_RAW);
    if(!$action) {
        $action = 'list_assignments';
    }
}

switch($action){
    case "list_courses":
        $courses = get_courses();
        include('view/course_list.php');
        break;

    case "add_course":
        add_course($course_name);
        header("Location: .?action=;ist_courses");
        break;

    case "add_assignments":
        if($course_id && $description){
            add_assignments($course_id, $description);
            header("Location: .?action=$course_id");
        } else {
            $error = "invalid assignment data. check all fields and try again.";
            include('view/error.php');
            exit();
        }
        break;
    
    case "delete_course":
        if($course_id){
            try{
                delete_course($course_id);
            } catch(PDOException $e){
                $error = "You cannot delete a course if assignments exist in the course.";
                include('view/error.php');
                exit();
            }
            header("Location: .?action=list_courses");
        }
        break;

    case "delete_assignment":
        if($assignment_id){
            delete_assignments($assignment_id);
            header("Location: .?action=list_courses");
        } else {
            $error = "missing or incorrect assignment id";
            include('view/error.php');
        }
 /*   case 'select':
        if($city){
            $results = select_city_by_name($city);
            include("view/update_delete_form.php");
        } else {
            $error_meggage = "Invalid city data: Check all fields";
            include("view/error.php");
        }
        break;
    case 'insert':
        if($city && $countryCode && $district && $population){
            $count = insert_city($city, $countryCode, $district, $population);
            header("Location: .?action=select&city={$city}&created{$count}");
        }   else {
            $error_meggage = "Invalid Data";
            include("view/error.php");
        }
        break;
    case 'update':
        if($id && $city && $countryCode && $district && $population){
            $count = update_city($id, $city, $countryCode, $district, $population);
            header("Location: .?action=select&city={$city}&created{$count}");
        }   else {
            $error_meggage = "Invalid Data";
            include("view/error.php");
        }
        break;
    case 'delete':
        if($id){
            $count = delete_city($id);
            header("Location: .?deleted={$count}");
        }
        break;
        */
    default:
        $course_name = get_course_name($course_id);
        $courses = get_courses();
        $assignments = get_assignments_by_course($course_id);
}



