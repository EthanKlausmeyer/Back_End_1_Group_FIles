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
        $action = 'list_assingments';
    }
}

switch($action){
    case 'select':
        if($city){
            $results = select_city_by_name($city);
            include("view/update_delete_form.php");
        } else {
            $error_meggage = "Invalid city data: Chack all feilds";
            include("view/error.php");
        }
        break;
    case 'incert':
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
    default:
        $course_name = get_course_name($course_id);
        $courses = get_courses();
        $assignments = get_assignments_by_course($course_id);
}



