<?php
include ("header.php")
?>
<section>
            <h2>
                Select Data/ Read Data
            </h2>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "GET">
                <label for="city">City Name:</label>
                <input type="hidden" name="action" value="select">
                <input type="text" id = "city" name = "city" required>
                <button>Submit</button>
        
        </form>
        </section>
        <section>
            <h2>Insert Data/Create Data</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="hidden" name="action" value="incert">
                <input type="hidden" name="">
                <label for="city">New City:</label>
                <input type="text" id = "newcityCity" name = "city" required>
                <label for="countryCode">Country Code:</label>
                <input type="text" id = "countryCode" name = "countryCode" required>
                <label for="district">District:</label>
                <input type="text" id = "district" name = "district" required>
                <label for="population">Population:</label>
                <input type="text" id = "population" name = "population" required>
                <button>Create</button>
                </form>
        </section>
        <a href=".">Back to form</a>
<?php
include ("footer.php")
?>