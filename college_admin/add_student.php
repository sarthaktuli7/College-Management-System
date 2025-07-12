<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit;
}

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $department_id = trim($_POST['department_id']);
    $admission_year = trim($_POST['admission_year']);

    if ($name && $email && $department_id && $admission_year) {
        $stmt = $conn->prepare("INSERT INTO student (name, email, department_id, admission_year) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssii", $name, $email, $department_id, $admission_year);
        $stmt->execute();
        header("Location: student.php");
        exit;
    } else {
        $error = "All fields are required.";
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Add Student</title></head>
<body>
    <h2>Add Student</h2>
    <a href="student.php">← Back</a>
    <form method="POST">
        <p>Name: <input type="text" name="name" required></p>
        <p>Email: <input type="email" name="email" required></p>
        <p>Department ID: <input type="number" name="department_id" required></p>
        <p>Admission Year: <input type="number" name="admission_year" min="2000" max="2099" required></p>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <button type="submit">Add Student</button>
    </form>
</body>
</html>
