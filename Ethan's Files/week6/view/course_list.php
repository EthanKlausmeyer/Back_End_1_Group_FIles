<?php include('view/header.php') ?>


<?php if ($course) { ?>
    <section id="list" class="list">
        <header>
            <h1>Course List</h1>
        </header>
        <?php foreach($courses as $course) : ?>
            <div class="list_item">
                <form action="." method="post">
                    <input type="hidden" name="action" view="delete_course">
                    <input type="hidden" name="course_id" id="<?= $course['CourseID'] ?>">
                    <button>X</button>
                </form>
            </div>
        <?php endforeach; ?>
    </section>
    <?php } else { ?>
        <p>No Categories Exist Yet</p>
        <?php } ?>

        <section>
            <h2>Add Course</h2>
            <form action="." method = "post" id="add_form" class="add_form">
                <input type="hidden" name="action" value="add_course">
                <div class="add_inputs">
                    <label>Course Name</label>
                    <input type="text" name="course_name" maxlength="30" placeholder="Course Name" autofocus required>
                </div>
                <div class="add__addItem">
                    <button class ="add_button">Add Course</button>
                </div>
            </form>
        </section>



<?php include('view/footer.php') ?>