<?php
session_start();
require_once "db.php";

$err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $query = "SELECT * FROM admin WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);

    $stmt->execute();
    $result = $stmt->get_result();
    $admin = $result->fetch_assoc();

    if ($admin && $admin['password'] === $password) {
        $_SESSION['admin'] = $admin['username'];
        $_SESSION['admin_logged_in'] = true; // ✅ Important for access control
        header("Location: dashboard.php");
        exit();
    } else {
        $err = "Invalid credentials.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
            padding-top: 100px;
            text-align: center;
        }
        form {
            background-color: white;
            padding: 40px;
            margin: auto;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px #aaa;
        }
        input {
            padding: 10px;
            width: 90%;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px;
            width: 100%;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 5px;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<form method="POST">
    <h2>Admin Login</h2>
    <?php if ($err): ?>
        <div class="error"><?= htmlspecialchars($err) ?></div>
    <?php endif; ?>
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>

</body>
</html>
