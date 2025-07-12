<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit;
}

include 'db.php'; // assumes your DB connection

// Fetch all students
$students = $conn->query("SELECT * FROM student");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Students</title>

    
</head>
<body>
    <h2>Students</h2>
    <a href="dashboard.php">← Back to Dashboard</a> | 
    <a href="add_student.php">Add New Student</a> | 
    <a href="logout.php">Logout</a>
    <hr>
    <table border="1">
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
        </tr>
        <?php while ($row = $students->fetch_assoc()): ?>
        <tr>
            <td><?= $row['student_id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            
            <td>
                <a href="edit_student.php?id=<?= $row['student_id'] ?>">Edit</a> |
                <a href="delete_student.php?id=<?= $row['student_id'] ?>" onclick="return confirm('Delete this student?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
