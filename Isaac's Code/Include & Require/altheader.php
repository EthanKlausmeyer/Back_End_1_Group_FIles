<header>
    <?php
        $name = filter_input(INPUT_GET, "firstName", FILTER_SANITIZE_SPECIAL_CHARS);
        if(!empty($name)){
            include("./visitor_greeting.php");
        }else{
            include("./user_greeting.php");
        }
    ?>
</header>