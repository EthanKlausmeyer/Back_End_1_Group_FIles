<main class="main-entry">
    <h2 id="enterNumber">Enter a number:</h2>

    <form class="main-entry__form"  action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">

        <input class="main-entry__input" type="text" id="num" name="num" 
        aria-labelledby="enterNumber" maxlength="2" autofocus required></input>
        <button class="main-entry__button">GO!</button>
    </form>
</main>