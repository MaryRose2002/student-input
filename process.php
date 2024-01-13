<?php
    include("conn.php");

//add user
if (isset($_POST['register'])) {
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $level = $_POST['level'];
    $school = $_POST['school'];
    $course = $_POST['course'];

    $insert_user = $conn->prepare("INSERT INTO users(first_name,last_name,year_level,school,course) VALUES(?, ?, ?, ?, ?)");
    $insert_user->execute([
        $fname,
        $lname,
        $level,
        $school,
        $course
    ]);

    $msg = "User Created!";
    header("Location: index.php?msg=$msg");
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fname = $_POST['first'];
    $lname = $_POST['last'];
    $level = $_POST['level'];
    $school = $_POST['school'];
    $course = $_POST['course'];

    $updateUser = $conn->prepare("UPDATE users SET first_name=?, last_name=?, year_level=?, school=?, course=? WHERE id = ?");
    $updateUser->execute([$fname, $lname, $level, $school, $course, $id]);

    $msg = 'Successfully Updated!';
    header("Location: index.php?msg=$msg");
}

if (isset($_GET['delete'])) {
    $id = $_GET['id'];

    $delete = $conn->prepare("DELETE FROM users WHERE id=?");
    $delete->execute([$id]);

    header("Location: index.php");
    exit();
}

?>