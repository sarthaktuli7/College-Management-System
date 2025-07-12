<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit;
}

include 'db.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: student.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    if ($name && $email) {
        $stmt = $conn->prepare("UPDATE student SET name=?, email=? WHERE student_id=?");
        $stmt->bind_param("ssi", $name, $email, $id);
        $stmt->execute();
        header("Location: student.php");
        exit;
    } else {
        $error = "Both fields are required.";
    }
} else {
    $stmt = $conn->prepare("SELECT * FROM student WHERE student_id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $student = $result->fetch_assoc();
    if (!$student) {
        header("Location: student.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <a href="student.php">← Back</a>
    <form method="POST">
        <p>Name: <input type="text" name="name" value="<?= htmlspecialchars($student['name']) ?>" required></p>
        <p>Email: <input type="email" name="email" value="<?= htmlspecialchars($student['email']) ?>" required></p>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <button type="submit">Update</button>
    </form>
</body>
</html>
