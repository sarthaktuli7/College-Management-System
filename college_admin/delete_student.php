<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: index.php");
    exit;
}

include 'db.php';

$id = $_GET['student_id'] ?? null;

if ($id) {
    $stmt = $conn->prepare("DELETE FROM student WHERE student_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

header("Location: student.php");
exit;
?>
