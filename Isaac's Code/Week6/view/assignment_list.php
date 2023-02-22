<?php include ("view/header.php"); ?>
<section id="list" class="list">
    <header>
        <form action="." method="get" id="list_header_select" class="list__header__select">
            <input type="hidden" name="action" vlaue="list_assignments">
            <select>
                <option value="0">View All</option>
                <?php foreach($courses as $course): ?>
                    <?php if($couse_id == $course['CourseID']) { ?>
                        <option value="<?= $course['CourseID'] ?>">
                        <?php } else { ?>
                        <option value="<?= $course['CourseID']?>">
                        <?php } ?>
                        <?= $course['courseName']?>
                        </option>
                    <?php endforeach; ?>
            </select>
            <button>GO</button>
        </form>
    </header>
    <?php
    if($assignments){
        foreach($assignments as $assignment) :
        ?><div class="list_row">
            <div class="list_item">
                <p><?= $assignment['courseName']?></p>
                <p><?=$assignment['Description']?></p>
            </div>
            <div class="list_removeItem">
                <form action="." method="post">
                    <input type="hidden" name="action" value="delete_assignment">
                    <input type="hidden" name="assignment_id" value="<?=$assignment[':ID']?>">
                    <button>X</button>
                </form>
            </div>
        </div>
     <?php   endforeach;
    } else{?>
        <br>
        <?php if($course_id){
            ?> <p>No assignments exist for this course</p>
        <?php
        } else {
            ?><p>No assignments exist yet</p><?php
        }
    }?>
</section>
<section id="add" class = "add">
    <h2>Add Assignment</h2>
    <form action="." method="post" id="add_form" class="add_form">
        <input type="hidden" name="action" value="add_assignment">
        <div class="add_input">
            <label>Course</label>
            <select name="course_id" required>
                <option calue="">Please select the course</option>
                <?php foreach($courses as $course):?>
                    <option value="<?= $course['courseID']?>">
                        <?=$course['courseName']?>
                    </option>
                <?php
                endforeach;
                ?>
            </select>
            <label>description</label>
            <input type="text" name="description" maxlength="120" placeholder="Assignment Description" required>
        </div>
    </form>
</section>
<?php include ("view/footer.php") ?>