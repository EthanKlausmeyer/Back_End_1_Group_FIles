<?php
$created = filter_input(INPUT_GET, "created", FILTER_UNSAFE_RAW);
$updated = filter_input(INPUT_GET, "updated", FILTER_UNSAFE_RAW);
$deleted = filter_input(INPUT_GET, "deleted", FILTER_UNSAFE_RAW);

if($created){
    echo "New city record is created"
}
if($updated){
    echo "New city record is updated"
}
if($deleted){
    echo "New city record is deleted"
}

?>