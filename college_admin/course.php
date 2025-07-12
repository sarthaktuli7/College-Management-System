<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
</head>
<body>
    <h2>Courses</h2>
    <a href="add_course.php">➕ Add New Course</a><br><br>
    <table border="1">
        <tr><th>ID</th><th>Name</th><th>Department</th><th>Actions</th></tr>
        <?php
        $result = $conn->query("SELECT * FROM course");
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['course_id']}</td>
                    <td>{$row['course_name']}</td>
                    <td>{$row['department_id']}</td>
                    <td>
                        <a href='edit_course.php?id={$row['course_id']}'>Edit</a> | 
                        <a href='delete_course.php?id={$row['course_id']}'>Delete</a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
    <br><a href="dashboard.php">⬅ Back to Dashboard</a>
</body>
</html>
