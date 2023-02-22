<?php
include('view/header.php');
    if($courses) {
?> <section id="list" class="list">
    <header><h1>Course List</h1></header>
    <?php
    foreach($courses as $course):
    ?>

    <div class="list_row">
        <div class="list_item">
            <p><?= $course['courseName']?></p>
        </div>
        <div class="list_removed">
            <form action="." method="post">
                <input type="hidden" name="action" value="delete_course">
                <input type="hidden" name="course_id" value="<?=$course['courseID']?>">
            </form>
        </div>
    </div>
    <?php
    endforeach;
    ?>
</section>
    <?php } else {
        ?><p>No categories exist yet</p><?php
    }?>
    <section>
        <h2>Add Courses</h2>
        <form action="." method="post" id="add_form" class="add_form">
            <input type="hidden" name="action" value="add_course">
            <div class="add_inputs">
                <label>Course Name</label>
                <input type="text" name="course_name" maxlength="30" placeholder="Course Name" autofocus required>

            </div>
        </form>
    </section>
    <?php
include('view/footer.php');
?>