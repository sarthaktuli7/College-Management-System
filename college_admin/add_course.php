<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>Add Course</title></head>
<body>
    <h2>Add Course</h2>
    <form method="post">
        Name: <input type="text" name="course_name" required><br><br>
        Department ID: <input type="number" name="department_id" required><br><br>
        <input type="submit" name="submit" value="Add Course">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['course_name'];
        $dept = $_POST['department_id'];
        $sql = "INSERT INTO course (course_name, department_id) VALUES ('$name', $dept)";
        if ($conn->query($sql) === TRUE) {
            echo "✅ Course added. <a href='course.php'>Go Back</a>";
        } else {
            echo "❌ Error: " . $conn->error;
        }
    }
    ?>
</body>
</html>
