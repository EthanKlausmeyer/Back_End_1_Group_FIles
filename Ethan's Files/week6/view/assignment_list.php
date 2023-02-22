<?php include ("view/header.php"); ?>
<section id="list" class="list">
    <header>
        <form action="." method="get" id="list_header_select" class="list__header__select">
            <input type="hidden" name="action" vlaue="list_assignments">
            <select>
                <option value="0">View All</option>
                <?php foreach($courses as $course): ?>
                    <?php if($couse_id == $course['course_id']) { ?>
                        <option value="<?= $course['course_id'] ?>">
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
</section>
<?php include ("view/footer.php") ?>