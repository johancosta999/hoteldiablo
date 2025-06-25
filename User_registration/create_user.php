<?php
session_start();
if ($_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

include('db_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);
    $role = trim($_POST['role']);  

    $insertQuery = $conn->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");
    $insertQuery->bind_param("ssss", $username, $email, $password, $role);

    if ($insertQuery->execute()) {
        $_SESSION['notify'] = "User created successfully!";
    } else {
        $_SESSION['notify'] = "Error: " . $insertQuery->error;
    }

    header("Location: admin_dashboard.php");
    exit();
}
?>


<form action="create_user.php" method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <select name="role">
        <option value="user">User</option>
        <option value="admin">Admin</option>
    </select>
    <button type="submit">Create User</button>
</form>
