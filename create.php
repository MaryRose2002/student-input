<?php
include 'header.php';
?>

    <center>
    <h1><b>Student Input Form</b></h1>
    <form action="process.php" method="POST">
        
        <label
        for="first_name">First Name:</label>
        <input type="text" name="first" id="first_name"required><br><br>
        <label
        for="last_name">Last Name:</label>
        <input type="text" name="last" required><br><br>
        <label
        for="age">Year Level:</label>
        <input type="text"name="level" id="year_level"required><br><br>
        <label
        for="last_name">School:</label>
        <input type="text" name="school" required><br><br>
        <label
        for="course">Course:</label>
        <input type="text" name="course" id="course"required><br><br>
        <input type="submit"value="submit" name="register">
    </form>
</center>

</body>
</html>