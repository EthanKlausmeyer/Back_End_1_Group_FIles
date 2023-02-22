<main class="main-entry">
    <h1 id = "enterNumber">Enter a number</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" class="main-entry__form" method = "GET">
        <input class = "main-entry__input"
        type="text"
        id = "num"
        name = "num"
        aria_labelledby = "enterNumber"
        maxlength = "2"
        autofocus
        required>
        <button class ="main-entry__button">GO!</button>
    </form>
</main>