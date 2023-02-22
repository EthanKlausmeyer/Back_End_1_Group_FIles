

<?php
include("model/database.php");
include("model/city_db.php");

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

// Post Data


$countryCode = filter_input(INPUT_POST, "countryCode", FILTER_UNSAFE_RAW);
$district = filter_input(INPUT_POST, "district", FILTER_UNSAFE_RAW);
$population = filter_input(INPUT_POST, "population", FILTER_UNSAFE_RAW);

// Get Data
$action = filter_input(INPUT_POST, "action", FILTER_UNSAFE_RAW);
if(!$action){
    $action = filter_input(INPUT_GET, "action", FILTER_UNSAFE_RAW);
    if(!$action) {
        $action = 'create_record_form';
    }
}

$city = filter_input(INPUT_POST, "city", FILTER_UNSAFE_RAW);
if(!$city){
    $city = filter_input(INPUT_GET, "city",  FILTER_UNSAFE_RAW) ;
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
        include("view/create_record_form.php");
}



