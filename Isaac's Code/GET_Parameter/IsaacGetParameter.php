<!DOCTYPE html>
<html lang="en">
    <?php
    //fetching $firstname from the browser's url directly
        $firstname=filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    //fetching $lastname from the browser's url directly
        $lastname=filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
    //GET $age
        $age=filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);

    
    //Introduce with name
        echo "Hello, my name is {$firstname} {$lastname}.<br/>";
    
    //based on condition, display voting legality
        if($age>=18){
            echo "I am {$age} years old and I am old enough to vote in the United States.<br/>";
        }
        else{
            echo "I am {$age} years old and I am not old enough to vote in the United States.<br/>";
        }
    //calculate number of days from age
        $numofdays = $age  * 365;
        echo "Number of days from the age is {$numofdays} <br/>";
    //display current date
        $date = date('Y-m-d H:i:s');
        echo $date;
    ?>
