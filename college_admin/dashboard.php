<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            padding-top: 50px;
            background-color: #f2f2f2;
        }
        h2 {
            margin-bottom: 30px;
        }
        .btn {
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            display: inline-block;
        }
        .logout {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['admin']; ?>!</h2>

    <a class="btn" href="student.php">Manage Students</a>
    <a class="btn" href="course.php">Manage Courses</a>
    <a class="btn" href="enrollment.php">Manage Enrollments</a>
    <br><br>
    <a class="btn logout" href="logout.php">Logout</a>
</body>
</html>
