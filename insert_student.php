<?php
include("db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $enrollment_no = $_POST['enrollment_no'];
    $course = $_POST['course'];

    $sql = "INSERT INTO students (NAME, ENROLLMENT_NO, COURSE) 
            VALUES ('$name', '$enrollment_no', '$course')";

    if ($conn->query($sql) === TRUE) {
        echo "New student inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert Student</title>
</head>
<body>
    <h2>Insert Student</h2>
    <form method="POST" action="insert_student.php">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Enrollment No:</label>
        <input type="text" name="enrollment_no" required><br><br>

        <label>Course:</label>
        <input type="text" name="course" required><br><br>

        <input type="submit" value="Insert Student">
    </form>
</body>
</html>
